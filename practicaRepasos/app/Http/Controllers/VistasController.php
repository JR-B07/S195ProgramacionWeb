<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistasController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }
    public function repaso1()
    {
         return view('repaso1');
    }
}
