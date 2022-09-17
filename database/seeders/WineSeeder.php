<?php

namespace Database\Seeders;

use App\Models\Wine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wine::insert([
           [
               'name' => 'Allegiance Wines',
               'type' => 'Red Wine',
               'price'=> 40,
               'quantity' => 10,
               'region' => 'ACT'
           ],
           [
               'name' => 'Alex Russell Wines',
               'type' => 'Red Wine',
               'price'=> 28,
               'quantity' => 5,
               'region' => 'TAS'
           ],
           [
               'name' => 'White Duck Chardonnay Pinot',
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
               'name' => 'Delatite Estate Riesling',
               'type' => 'White Wine',
               'price'=> 27,
               'quantity' => 8,
               'region' => 'VIC'
           ],
           [
               'name' => 'Andrew Garrett',
               'type' => 'Sparkling',
               'price'=> 15,
               'quantity' => 5,
               'region' => 'SA'
           ],
           [
               'name' => 'Copper Prestige Cuvee',
               'type' => 'Sparkling',
               'price'=> 22,
               'quantity' => 4,
               'region' => 'NSW'
           ],
        ]);
    }
}
