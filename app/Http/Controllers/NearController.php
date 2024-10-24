<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class NearController extends Controller
{
    public function getWalletData($accountId)
    {
        $client = new Client();
        $url = "https://rpc.testnet.near.org";
    
        try {
            $response = $client->post($url, [
                'json' => [
                    'jsonrpc' => '2.0',
                    'id'      => 'dontcare',
                    'method'  => 'query',
                    'params'  => [
                        'request_type' => 'view_account',
                        'finality'     => 'final',
                        'account_id'   => $accountId
                    ]
                ]
            ]);
    
            $walletData = json_decode($response->getBody()->getContents(), true)['result'];
    
            // Obtener el precio de NEAR en USD
            $priceResponse = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=near&vs_currencies=usd');
            $priceData = json_decode($priceResponse->getBody()->getContents(), true);
            $nearToUsd = $priceData['near']['usd'];
    
            // Convertir la cantidad de yoctoNEAR a NEAR
            $amountInNear = bcdiv($walletData['amount'], '1000000000000000000000000', 24); // 24 decimales para NEAR
            $amountInUsd = bcmul($amountInNear, $nearToUsd, 2); // Multiplicar por el precio en USD
    
            return view('wallet', compact('walletData', 'amountInUsd'));
    
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error obteniendo los datos de la cuenta',
                'message' => $e->getMessage()
            ], 500);
        }
    }
    
    public function showDonations($username)
    {
        // Aquí deberías obtener el saldo de la wallet para el usuario
        $walletValue = 100; // Cambia esto por tu lógica para obtener el valor real de la wallet

        return view('donations', compact('walletValue'));
    }


    public function donate(Request $request)
{
    $validatedData = $request->validate([
        'amount' => 'required|numeric|min:5',
    ]);

    // Aquí iría la lógica para procesar la donación a través de la blockchain

    // Retornar respuesta
    return response()->json(['success' => true, 'message' => 'Donación realizada']);
}
    
    
}