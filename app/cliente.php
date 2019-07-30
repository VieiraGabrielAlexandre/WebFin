<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    public function lista()
    {
        return (object) [
            (object) ["nome"=>"Gabriel"],
            (object) ["nome"=>"Juliana"],
            (object) ["nome"=>"José"],
            (object) ["nome"=>"Maria"],
        ];
    }
}
