<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('customer.clientes')->with('clientes', $clientes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.crear');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clientes = new Cliente();
        $clientes->nombre = $request->get('nombre');
        $clientes->apellido = $request->get('apellido');
        $clientes->teléfono = $request->get('teléfono');
        $clientes->empresa = $request->get('empresa');
        $clientes->correo = $request->get('correo');

        $clientes->save();
        $mensaje = 'Se ha creado al cliente ' . $clientes->nombre . ' ' . $clientes->apellido . ' satisfactoriamente.';
        return redirect('/cliente')->with('success', $mensaje);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('customer.editar')->with('cliente', $cliente);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);

        $cliente->nombre = $request->get('nombre');
        $cliente->apellido = $request->get('apellido');
        $cliente->teléfono = $request->get('teléfono');
        $cliente->empresa = $request->get('empresa');
        $cliente->correo = $request->get('correo');

        $cliente->save();
        $mensaje = 'Ya se ha editado el cliente ' . $cliente->nombre . ' ' . $cliente->apellido . ' satisfactoriamente.';
        return redirect('/cliente')->with('success', $mensaje);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        // Obtén el ID del cliente a eliminar del campo oculto en el formulario
        $clientId = $request->input('delete-client-id');

        // Busca el cliente por su ID
        $cliente = Cliente::find($clientId);

        if (!$cliente) {
            // Manejo de error si el cliente no se encuentra
            return redirect('/cliente')->with('error', 'El cliente no se encontró o ya ha sido eliminado.');
        }

        // Elimina el cliente
        $cliente->delete();

        // Mensaje de éxito
        $mensaje = 'Se ha eliminado al cliente ' . $cliente->nombre . ' ' . $cliente->apellido . ' satisfactoriamente.';

        // Redirige a la página de clientes con un mensaje de éxito
        return redirect('/cliente')->with('success', $mensaje);
    }
    public function mostrarDashboard()
    {
        $ultimosClientes = Cliente::orderBy('created_at', 'desc')->take(5)->get();

        return view('dashboard', compact('ultimosClientes'));
    }
}
