<?php

namespace Database\Seeders;

use App\Models\WineAus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WineAusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WineAus::insert([
            [
                'name' => 'Rockford',
                'type' => 'Red Wine',
                'price'=> 15,
                'quantity' => 2,
                'region' => 'ACT'
            ],
            [
                'name' => 'Penfolds',
                'type' => 'Red Wine',
                'price'=> 36,
                'quantity' => 4,
                'region' => 'VIC'
            ],
            [
                'name' => 'Mount Mary',
                'type' => 'White Wine',
                'price'=> 18,
                'quantity' => 9,
                'region' => 'NSW'
            ],
            [
                'name' => 'Allegiance Wines',
                'type' => 'Red Wine',
                'price'=> 41,
                'quantity' => 10,
                'region' => 'ACT'
            ],
            [
                'name' => 'Copper Prestige',
                'type' => 'Sparkling',
                'price'=> 8,
                'quantity' => 9,
                'region' => 'NSW'
            ],
            [
                'name' => 'Moss Wood',
                'type' => 'White Wine',
                'price'=> 34,
                'quantity' => 5,
                'region' => 'SA'
            ],
            [
                'name' => 'Andrew Garrett',
                'type' => 'Sparkling',
                'price'=> 39,
                'quantity' => 9,
                'region' => 'TAS'
            ],
        ]);
    }
}
