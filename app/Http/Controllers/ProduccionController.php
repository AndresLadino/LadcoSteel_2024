<?php

namespace App\Http\Controllers;

use App\Mail\EnviarCorreoProduccion;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Produccion;
use App\Models\Cliente;
use App\Models\User;
use Carbon\Carbon;

class ProduccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function administrador()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function index()
    {
        $pedidos = Produccion::all();
        return view('produccion.index')->with('pedidos', $pedidos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        $users = User::all();
        return view('produccion.create', compact('users', 'clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produccion = new Produccion();
        // Genera una referencia con caracteres aleatorios
        $referencia = strtoupper(Str::random(5)) . '-' . strtoupper(Str::random(5)) . '-' . strtoupper(Str::random(5)) . '-' . strtoupper(Str::random(5));
        $produccion->referencia = $referencia;
        //Fin
        $produccion->titulo = $request->get('titulo');
        $produccion->descripcion = $request->get('descripcion');
        $produccion->estado = $request->get('estado');
        $produccion->cliente_id = $request->input('cliente');
        $produccion->user_id = $request->input('administrador');



        $produccion->save();
        $esInsercion = true;

        $cliente = Cliente::find($produccion->cliente_id);
        if ($cliente) {
            $clienteEmail = $cliente->correo; // Suponiendo que el campo del correo se llama 'correo'
            Mail::to($clienteEmail)->send(new EnviarCorreoProduccion(true, $referencia));
            return redirect('/produccion')->with('success', 'Se ha creado la nueva producción, correo enviado al cliente.');
        } else {
            return redirect('/produccion')->with('success', 'Se ha creado la nueva producción, correo no fue enviado por falta de información del cliente (Correo electrónico).');
        }
        return redirect('/produccion');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cliente = Cliente::all();
        $user = User::all();
        $item = Produccion::with('user')->find($id); // Cargar la relación 'user'

        $estados = ['Recibido', 'En producción', 'Finalizado', 'Entregado'];
        return view('produccion.edit')->with([
            'item' => $item,
            'clientes' => $cliente,
            'users' => $user,
            'estados' => $estados, // Variable que contiene los estados
        ]);
    }

    public function verificarPedido($referencia)
    {
        $pedido = Produccion::where('referencia', $referencia)->first();

        if ($pedido) {
            return view('estado-pedido', ['pedido' => $pedido]);
        } else {
            return view('pedido-no-encontrado');
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Produccion::find($id);
        // Obtén el estado actual antes de actualizar
        $estadoActual = $item->estado;
        $item->referencia = $request->get('referencia');
        $item->titulo = $request->get('titulo');
        $item->descripcion = $request->get('descripcion');
        $item->cliente_id = $request->input('cliente');
        $item->user_id = $request->input('gestor_id');
        $item->estado = $request->get('estado');

        // Verifica si el estado ha cambiado
        if ($item->estado != $estadoActual) {
            // Dependiendo del nuevo estado, actualiza la fecha correspondiente
            switch ($request->get('estado')) {
                case 'Recibido':
                    $item->fecha_estado_recibido = Carbon::now('America/Bogota');
                    break;
                case 'En producción':
                    $item->fecha_estado_produccion = Carbon::now('America/Bogota');
                    break;
                case 'Finalizado':
                    $item->fecha_estado_finalizado = Carbon::now('America/Bogota');
                    break;
                case 'Entregado':
                    $item->fecha_estado_entregado = Carbon::now('America/Bogota');
                    break;
                default:
                    // Cualquier otro estado
                    $item->fecha_estado_otro = Carbon::now('America/Bogota');
                    break;
            }

            $item->save();

            $cliente = Cliente::find($item->cliente_id);
            if ($cliente) {
                $clienteEmail = $cliente->correo; // Suponiendo que el campo del correo se llama 'correo'
                Mail::to($clienteEmail)->send(new EnviarCorreoProduccion(false, $item->referencia));
                return redirect('/produccion')->with('success', 'Estado actualizado y correo enviado.');
            } else {
                return redirect('/produccion')->with('success', 'Estado actualizado y correo no fue enviado por falta de información del cliente.');
            }
        } else {
            // Si el estado no ha cambiado, simplemente guarda el objeto
            $item->save();
            return redirect('/produccion')->with('success', 'Estado actualizado.');
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Produccion::find($id);
        $cliente = Cliente::find($item->cliente_id);
        $clienteNombre = $cliente->nombre . ' ' . $cliente->apellido;
        $item->delete();

        $mensaje = 'Se ha eliminado la producción "' . $item->titulo . ' del cliente ' . $clienteNombre . '" satisfactoriamente.';
        return redirect()->route('produccion.index')->with('success', $mensaje);
    }
    public function mostrarUltimosClientes()
    {
        $ultimasProducciones = Produccion::orderBy('created_at', 'desc')->take(5)->get();

        // Inicializar un conjunto para almacenar los IDs de clientes únicos
        $clientesUnicos = new \Illuminate\Support\Collection;

        // Inicializar un array para almacenar los datos de los clientes
        $clientes = [];

        // Para cada producción, obtener el nombre y correo del cliente
        foreach ($ultimasProducciones as $produccion) {
            // Asumiendo que tienes una relación llamada "cliente" en el modelo "Produccion"
            $cliente = $produccion->cliente;

            // Verificar si el cliente existe y si su ID ya ha sido procesado
            if ($cliente && !$clientesUnicos->contains($cliente->id)) {
                $clientesUnicos->add($cliente->id);

                // Verificar si el cliente tiene nombre y correo
                if ($cliente->nombre && $cliente->correo) {
                    $clientes[] = [
                        'nombre' => $cliente->nombre,
                        'correo' => $cliente->correo,
                        'empresa' => $cliente->empresa,
                        'telefono' => $cliente->teléfono
                    ];
                }
            }
        }

        // Pasar los datos a la vista
        return view('dashboard', ['clientes' => $clientes]);
    }
}
