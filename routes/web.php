<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/foods/featured', [FoodController::class, 'featured'])
    ->name('foods.featured');

Route::get('/foods/filter/{value?}', function ($value = null) {
    if ($value) {
        return redirect()->route('foods.index', [
            'category' => $value
        ]);
    }

    return redirect()->route('foods.index');
})->name('foods.filter');

Route::resource('foods', FoodController::class);