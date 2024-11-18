<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CryptofetchModel extends Model
{
    //

    public function CoinGeckofetchCrypto(){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.coingecko.com/api/v3/coins/list?limit=10', [
            'headers' => [
              'accept' => 'application/json',
            ],
          ]);
          $body = $response->getBody() ;
          $data = json_decode($body->getContents(), true);
          return $data;
    }

    public function coinGateData(){


        $client = new \GuzzleHttp\Client();
        $uri = "https://api.coingate.com/api/v2/currencies?native=true&enabled=true%27";
        $response = $client->request('GET', 'https://api.coingate.com/api/v2/currencies', [
            'headers' => [
                'accept' => 'application/json',
            ],
        ]);

        $body =  $response->getBody();
        $datas = json_decode($body->getContents(), true);
        return $datas;
    }

}
