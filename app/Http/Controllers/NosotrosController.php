<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


/*
 * Este controller fue creado desde CMD, con el comando: php artisan make:controller NosotrosController
 */
class NosotrosController extends Controller
{
    public function index()
    {
        return view('nosotros');
    }
}
