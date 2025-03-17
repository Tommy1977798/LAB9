<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // ✅ Import the Product model

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create(['name' => 'Laptop', 'price' => 1200.00]);
        Product::create(['name' => 'Phone', 'price' => 800.00]);
        Product::create(['name' => 'Tablet', 'price' => 500.00]);
    }
}
