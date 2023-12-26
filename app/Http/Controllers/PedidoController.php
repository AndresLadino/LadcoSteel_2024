<?php

namespace App\Http\Controllers;

use App\Models\Pedido as ModelsPedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function verificar($referencia)
    {
        $pedido = ModelsPedido::where('referencia', $referencia)->first();

        if ($pedido) {
            return view('estado-pedido', ['pedido' => $pedido]);
        } else {
            return view('pedido-no-encontrado')->with('error', 'No se encontró ningún pedido con la referencia proporcionada.');
        }
    }
}
