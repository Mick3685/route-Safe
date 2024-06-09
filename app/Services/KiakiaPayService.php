<?php

namespace App\Services;

use GuzzleHttp\Client;

class KiakiaPayService
{
    protected $client;
    protected $publicKey;
    protected $secretKey;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client(['base_uri' => 'https://api.kiakia-pay.com']);
        $this->publicKey = env('KIAKIA_PAY_PUBLIC_KEY');
        $this->secretKey = env('KIAKIA_PAY_SECRET_KEY');
    }

    public function makePayment($data)
    {
        $response = $this->client->post('/payment', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->secretKey,
                'Content-Type' => 'application/json',
            ],
            'json' => $data
        ]);

        return json_decode($response->getBody(), true);
    }
}
