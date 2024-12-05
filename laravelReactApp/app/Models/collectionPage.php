<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class collectionPage extends Model
{
    //https://laravel.com/docs/11.x/collections
    public function productsCollections() {
        // Esto no se usa en ningun lado
        $myArray = ['php' , 'javascript' , 'react' , 'angular' , 'typescript' , 'sqlite' , 'html' , 'css' ] ;
        $collection = collect([1, 2, 3, 4, 5]);
        return $collection->all();
    }

 
}
