@extends('master')

@section('title', 'BlockSOS')

@section('content')
<div class="header">
    <div class="nav">
        <img alt="BlockSOS Logo" height="50" src="https://storage.googleapis.com/a1aa/image/O5NytdpKQxZKABBje2Ox5e1UMTxaapLrBejMRBHyxcTiusTnA.jpg" width="50"/>
        <div>
            <a href="#">Datos</a>
            <a href="#">Wallet</a>
            <a href="#">Seguimiento</a>
        </div>
        <div class="user-info">
            <i class="fas fa-user-circle"></i>
            <span>Fundación 1</span>
            <span>ejemplo@gmail.com</span>
        </div>
    </div>
</div>

<div class="banner">
    <img alt="BlockSOS Banner" height="150" src="https://storage.googleapis.com/a1aa/image/Zbl6NuRW1w4KM1WKULff2ZHG6FHHpgnHoctoBjGdBXDSX2pTA.jpg" width="150"/>
</div>

<div class="content">
    <h2>Datos</h2>
    <div class="form-section">
        <h3>
            <i class="fas fa-user-circle"></i>
            Fundación 1
        </h3>
        <form>
            <div class="form-group">
                <label for="nombre">Nombre(s)</label>
                <input id="nombre" type="text" value="Fundación 1"/>
            </div>
            <div class="form-group">
                <label for="razon-social">Razón Social</label>
                <select id="razon-social">
                    <option>Desastres</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" value="ejemplo@gmail.com"/>
            </div>
            <div class="form-group">
                <label for="pais">País</label>
                <select id="pais">
                    <option>México</option>
                </select>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input id="telefono" type="text" value="3111111111"/>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input id="descripcion" type="text" value="Somos una fundación"/>
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input id="contrasena" type="password" value="************"/>
            </div>
            <div class="form-group">
                <label for="nif">Número de Identificación Fiscal (NIF/RFC/EIN)</label>
                <input id="nif" type="password" value="************"/>
            </div>
            <div class="form-group">
                <input type="submit" value="Guardar cambios"/>
            </div>
        </form>
    </div>
</div>


@endsection
