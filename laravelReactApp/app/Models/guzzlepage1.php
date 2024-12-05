<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class guzzlepage1 extends Model
{
    //
    protected $fillable = ['url', 'content'];

    // Igual aqui se podria delegar el consumir la api a un servicio, para mantener la logica separada
    // Se recomienda usar algun formateador de codigo tal como https://laravel.com/docs/11.x/pint

    public function getData(){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.github.com/users');
        $body = $response->getBody();
        $data = json_decode($body->getContents(), true);
        return $data;
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
