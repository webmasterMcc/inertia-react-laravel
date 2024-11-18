<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class guzzlepage1 extends Model
{
    //
    protected $fillable = ['url', 'content'];

    public function getData(){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.github.com/users');
        $body = $response->getBody();
        $data = json_decode($body->getContents(), true);
        return $data;
    }




    public function fetchInstagramLuxmarble(){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://graph.facebook.com/17841447873394170/media?fields=media_type,thumbnail_url,children{thumbnail_url,media_url},media_url,media_product_type&limit=205&access_token=EAAKIm0GGuc0BO6x94LaP0pVgyZB6hpM1oVw97EoItSqfahGFlSsrn9uVwJZAfAcBJeIBe1l6lZAWiDtZAIoxovZBua8ZCN3x7JiwQzVNoHVSTsgjnZCg5GBOukZBPFQRY4uepZAZBnRCq7ZCZCpMCZBuy4sgYiYsHlWMwXG9CTN4D3zwLorYC91VdisJPT4ZAX8uCeSNe9');
        $body = $response->getBody();
        $data = $body->getContents();
        return view('instagramLuxmarble', compact('data'));
    }

    public function illuminatiTest($resourse='character') {
        //link ->https://rickandmortyapi.com/documentation
        $response = Http::get("https://rickandmortyapi.com/api/$resourse");
        // Convert response to JSON
         //$jsonResponse = $response->json();
        var_dump($response );
    }

    public function fetchRickAndMorty($resourse='character'){
        //link ->https://rickandmortyapi.com/documentation
        $response = Http::get("https://rickandmortyapi.com/api/$resourse");
        // Convert response to JSON
         $jsonResponse = $response->json();
        return $jsonResponse;
    }



}
