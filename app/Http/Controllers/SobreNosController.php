<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function sobreNos()
    {
        //retornar a view sobreNos
        return view('site.sobre-nos');
    }
}
