<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    public function login(Request $request)
{
    $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    // Aquí validarías las credenciales del usuario

    // Si las credenciales son válidas:
    $username = $request->input('username');
    session(['username' => $username]);

    // Redirigir a la página principal o donde desees
    return redirect()->route('home');
}

}
