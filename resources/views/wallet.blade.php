@extends('master')

@section('title', 'BlockSOS - Wallet')

@section('content')
<div class="content">
    <h2>Datos de la Wallet</h2>
    <div class="wallet-info">
        <table>
            <tr>
                <th>Cantidad</th>
                <td>{{ $walletData['amount'] }}</td>
            </tr>
            <tr>
                <th>Hash del Bloque</th>
                <td>{{ $walletData['block_hash'] }}</td>
            </tr>
            <tr>
                <th>Altura del Bloque</th>
                <td>{{ $walletData['block_height'] }}</td>
            </tr>
            <tr>
                <th>Hash del Código</th>
                <td>{{ $walletData['code_hash'] }}</td>
            </tr>
            <tr>
                <th>Bloqueado</th>
                <td>{{ $walletData['locked'] }}</td>
            </tr>
            <tr>
                <th>Almacenamiento Pagado</th>
                <td>{{ $walletData['storage_paid_at'] }}</td>
            </tr>
            <tr>
                <th>Uso de Almacenamiento</th>
                <td>{{ $walletData['storage_usage'] }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection