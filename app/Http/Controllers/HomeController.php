<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() // __invoke administra única ruta
    {
        return view('home');
    }
}
