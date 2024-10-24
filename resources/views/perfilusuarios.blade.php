@extends('master')

@section('title', 'Block SOS - Perfil')

@section('content')


<div class="banner">
    <img alt="Block SOS Banner" height="100" src="https://storage.googleapis.com/a1aa/image/E5seDdGPcP2WQ6sKd68n7sVy8dX8UPOup71onfqM4jaEJ2pTA.jpg" width="100"/>
</div>

<div class="content">
    <h2>Perfil</h2>
    <div class="profile-info">
        <img alt="User Avatar" height="50" src="https://storage.googleapis.com/a1aa/image/dJNhqkrB54bLO5uAJyDaS79lkAZHiBSbidT2SkvAfxtiE70JA.jpg" width="50"/>
        <h3>Cristan Aleck</h3>
    </div>
    <div class="form-group">
        <label for="nombre">Nombre(s)</label>
        <input id="nombre" type="text" value="Cristan Aleck"/>
        <label for="telefono">Teléfono</label>
        <input id="telefono" type="text" value="3111111111"/>
        <label for="ap-paterno">Ap. Paterno</label>
        <input id="ap-paterno" type="text" value="Hernández"/>
        <label for="ap-materno">Ap. Materno</label>
        <input id="ap-materno" type="text" value="Rodríguez"/>
        <label for="email">Email</label>
        <input id="email" type="text" value="ic-30003@utney.edu.mx"/>
        <label for="password">Contraseña</label>
        <input id="password" type="password" value="**********"/>
    </div>
    <button>Guardar cambios</button>
</div>


@endsection
