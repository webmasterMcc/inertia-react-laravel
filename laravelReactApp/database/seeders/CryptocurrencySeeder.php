<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cryptocurrency;

class CryptocurrencySeeder extends Seeder
{
    public function run()
    {
        $cryptocurrencies = [
            [
                'name' => 'Bitcoin',
                'symbol' => 'BTC',
                'price' => 50000.00
            ],
            [
                'name' => 'Ethereum',
                'symbol' => 'ETH',
                'price' => 3000.00
            ],
            // Add more cryptocurrencies as needed
        ];

        foreach ($cryptocurrencies as $crypto) {
            Cryptocurrency::updateOrCreate(
                ['symbol' => $crypto['symbol']],
                $crypto
            );
        }
    }
}