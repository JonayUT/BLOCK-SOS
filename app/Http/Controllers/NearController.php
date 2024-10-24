<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class NearController extends Controller
{
    public function getWalletData($accountId)
    {
        // Crear un cliente Guzzle
        $client = new Client();

        // Definir la URL del RPC de NEAR
        $url = "https://rpc.testnet.near.org"; // Cambia a mainnet si es la red principal

        // Hacer la petición POST al RPC de NEAR
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

            // Obtener la respuesta en formato JSON
            $responseData = json_decode($response->getBody(), true);

            // Retornar la respuesta como JSON
            return response()->json($responseData);

        } catch (\Exception $e) {
            // Manejar errores
            return response()->json([
                'error' => 'Error obteniendo los datos de la cuenta',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}