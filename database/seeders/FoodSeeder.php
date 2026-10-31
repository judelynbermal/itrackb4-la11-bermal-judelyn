<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Food;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    public function run(): void
    {
      

        $a = Category::create(['name' => 'Burger']);
        $b = Category::create(['name' => 'Breakfast']);
        $c = Category::create(['name' => 'Pasta']);
        $d = Category::create(['name' => 'Seafood']);
        $e = Category::create(['name' => 'Noodles']);

        Food::create([
            'name'        => 'Chicken Burger',
            'restaurant'  => 'Jollibee',
            'price'       => 149,
            'category_id' => $a->id,
        ]);

        Food::create([
            'name'        => 'Beef Tapa',
            'restaurant'  => 'Tapsi ni Vivian',
            'price'       => 189,
            'category_id' => $b->id,
        ]);

        Food::create([
            'name'        => 'Spaghetti',
            'restaurant'  => 'Jollibee',
            'price'       => 99,
            'category_id' => $c->id,
        ]);

        Food::create([
            'name'        => 'Fish Fillet',
            'restaurant'  => "McDonald's",
            'price'       => 179,
            'category_id' => $d->id,
        ]);

        Food::create([
            'name'        => 'Pancit Canton',
            'restaurant'  => 'Lucky Me',
            'price'       => 25,
            'category_id' => $e->id,
        ]); 
    }
}