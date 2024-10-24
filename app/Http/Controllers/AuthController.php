<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Aquí va tu lógica de autenticación (comprobar el usuario y contraseña)

        // Si la autenticación es exitosa, almacena el nombre de usuario en la sesión
        Session::put('walletName', $username);

        // Redirigir a la página de donaciones o a otra página que desees
        return redirect()->route('donations', ['username' => $username]);
    }
}
