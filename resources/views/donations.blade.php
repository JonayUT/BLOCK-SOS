@extends('master')

@section('title', 'Donaciones')

@section('content')
<div class="content">
    <h2>Realiza tu Donación</h2>

    <div class="donation-form">
        <label for="walletName">Nombre de tu Wallet:</label>
        <input id="walletName" type="text" value="{{ session('walletName') }}" disabled/>

        <label for="defaultAmount">Selecciona una cantidad:</label>
        <select id="defaultAmount" onchange="updateTotal()">
            <option value="5">$5</option>
            <option value="10">$10</option>
        </select>

        <label for="customAmount">O ingresa una cantidad diferente:</label>
        <input id="customAmount" type="number" placeholder="Cantidad" oninput="updateTotal()" />

        <h3>Total de Donaciones: $<span id="totalDonations">0.00</span></h3>
        <h3>Saldo en tu Wallet: $<span id="walletBalance">{{ $walletValue }}</span></h3>

        <button id="donateButton" onclick="previewDonation()">Donar</button>
    </div>

    <div id="previewMessage" style="margin-top: 20px; display: none;">
        <h3>Preview de Donación</h3>
        <p id="previewText"></p>
    </div>
</div>

<script>
    let totalDonations = 0;

    function updateTotal() {
        const defaultAmount = parseFloat(document.getElementById('defaultAmount').value);
        const customAmount = parseFloat(document.getElementById('customAmount').value) || 0;
        totalDonations = defaultAmount + customAmount;

        document.getElementById('totalDonations').innerText = totalDonations.toFixed(2);
    }

    function previewDonation() {
        const currentBalance = parseFloat(document.getElementById('walletBalance').innerText);
        const newBalance = currentBalance - totalDonations;

        const previewText = `Si donas $${totalDonations.toFixed(2)}, tu nuevo saldo sería $${newBalance.toFixed(2)}.`;
        document.getElementById('previewText').innerText = previewText;
        document.getElementById('previewMessage').style.display = 'block';
    }
</script>
@endsection
