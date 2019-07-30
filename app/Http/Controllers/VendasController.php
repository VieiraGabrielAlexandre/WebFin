<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\categoriavendas;

class VendasController extends Controller
{
    public function vendas()
    {
        $categoriavendas = new CategoriaVendas;

        $vendas = $categoriavendas->vendas();
        return view ('categoriavendas',compact('vendas'));
    }
}
