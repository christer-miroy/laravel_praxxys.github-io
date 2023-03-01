<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* seeding */
        // $products = [
        //     [
        //         'name' => 'rose',
        //         'category' => 'flowers',
        //         'description' => 'red',
        //         'datetime' => '2023-03-01 00:47.02.000000'
        //     ],
        //     [
        //         'name' => 'flower vase',
        //         'category' => 'flower accessories',
        //         'description' => 'porcelain',
        //         'datetime' => '2023-02-28 23:47.02.000000'
        //     ],
        // ];

        // foreach($products as $key => $value) {
        //     Products::create($value);
        // }

        /* seeding */
        Products::factory() -> count(50) -> create();
    }
}
