<?php

namespace Database\Seeders;

use App\Models\AusWine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AusWineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AusWine::insert([
            [
                'wineName' => 'Red Wines of au',
                'wineType' => 'Red Wine',
                'winePrice'=> 15,
                'wineQuantity' => 2,
                'wineRegion' => 'ACT'
            ],
            [
                'name' => 'Alex Russell',
                'type' => 'Red Wine',
                'price'=> 28,
                'quantity' => 5,
                'region' => 'VIC'
            ],
            [
                'name' => 'White Duck Chardonnay',
                'type' => 'White Wine',
                'price'=> 18,
                'quantity' => 9,
                'region' => 'NSW'
            ],
            [
                'name' => 'Allegiance Wines',
                'type' => 'Red Wine',
                'price'=> 40,
                'quantity' => 10,
                'region' => 'ACT'
            ],
            [
                'name' => 'Copper Prestige',
                'type' => 'Sparkling',
                'price'=> 35,
                'quantity' => 8,
                'region' => 'NSW'
            ],
            [
                'name' => 'Delatite Riesling',
                'type' => 'White Wine',
                'price'=> 45,
                'quantity' => 16,
                'region' => 'SA'
            ],
            [
                'name' => 'Andrew Garrett',
                'type' => 'Sparkling',
                'price'=> 56,
                'quantity' => 12,
                'region' => 'TAS'
            ],
        ]);
    }
}
