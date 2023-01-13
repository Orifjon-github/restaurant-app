<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Bifshteks',
            'photo' => 'url',
            'about' => 'bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla',
            'price' => 5,
            'category_id' => 1,
        ]);
    }
}
