<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class guzzleSwipper extends Model
{
    //

    public function fetchInstagramLux(){

        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://graph.facebook.com/17841447873394170/media?fields=media_type,thumbnail_url,children{thumbnail_url,media_url},media_url,media_product_type&limit=205&access_token='.env('luxmarbleInstagramToken'));
        $body = $response->getBody();
        $data = json_decode($body->getContents(), true);
         //var_dump($data) ;
         return $data;
    }
}
