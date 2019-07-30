<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    public function vendas()
    {
        return (object) [
            (object) ["Categoria"=>"Suplementos"],
            (object) ["Categoria"=>"Medicamento"],
            (object) ["Categoria"=>"Loja de Vendas"],
        ];
    }
}
