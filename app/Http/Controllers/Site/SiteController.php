<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index ()
    {
        return 'Home Page do Site';
    }

    public function contato ()
    {
        return 'Pagina Contato';
    }

    public function categoria($id)
    {
        return "Listagem dos posts da categoria {$id}";
    }
}
