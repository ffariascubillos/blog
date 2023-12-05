<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){ // __invoke() se utiliza cuando queremos que el controlador utilice una única ruta.
        return view('home');
    }
}
