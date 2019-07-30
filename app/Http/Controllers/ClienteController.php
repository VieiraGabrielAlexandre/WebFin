<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;

class ClienteController extends Controller
{
    public function lista()
    {
        $cliente = new Cliente;

        //dd($cliente->lista());
        $lista = $cliente->lista();
        return view('cliente',compact('lista'));
    }
}
