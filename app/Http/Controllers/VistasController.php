<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistasController extends Controller
{
    public function index()
    {
        return view('index'); // Asegúrate de que el archivo se llame index-user.blade.php
    }

    public function listacategorias()
    {
        return view('listacategorias'); // Asegúrate de tener un archivo donations.blade.php en resources/views
    }

    public function perfilUsuarios() {
        return view('perfilusuarios');
    }

    public function datosFundacion() {
        return view('datosfundacion');
    }
    
    public function listaFundaciones() {
        return view('listafundaciones'); // Asegúrate de que el archivo listafundaciones.blade.php exista
    }
    
    public function donacionesuser() {
        return view('donacionesuser');
    }

    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

}
