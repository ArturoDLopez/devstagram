<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Este metodo se ejecutara cuando se llame a la ruta /
    public function __invoke(){
        return view("home");
    }
}
