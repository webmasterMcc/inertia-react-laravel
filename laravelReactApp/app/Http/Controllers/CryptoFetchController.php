<?php

namespace App\Http\Controllers;

use App\Models\CryptofetchModel;
use App\Models\Cryptocurrency;
use Illuminate\Http\Request;

class CryptoFetchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cryptos = CryptofetchModel::all();
        return view('crypto-fetch.index', compact('cryptos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CryptofetchModel $cryptofetchModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CryptofetchModel $cryptofetchModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CryptofetchModel $cryptofetchModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CryptofetchModel $cryptofetchModel)
    {
        //
    }

    public function testData(){
        

            // Create a new cryptocurrency
            $crypto = new Cryptocurrency();
            $crypto->name = 'Bitcoin';
            $crypto->symbol = 'BTC';
            $crypto->price = 50000.00;
            $crypto->save();

            // Retrieve all cryptocurrencies
            $allCryptos = Cryptocurrency::all();

            // Find a specific cryptocurrency
            $bitcoin = Cryptocurrency::where('symbol', 'BTC')->first();

            // Update price
            $bitcoin->price = 51000.00;
            $bitcoin->save();
    }
}
