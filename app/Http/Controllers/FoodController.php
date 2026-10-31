<?php

namespace App\Http\Controllers;


use App\Models\Food;
use Illuminate\Http\Request;
use App\Models\Category;

class FoodController extends Controller
{
    public function index(Request $request)
{
    

    $categoryId = $request->query('category_id');
    $restaurant = $request->query('restaurant');

    $query = Food::with('category');
    if ($categoryId) {
        $query = $query->where('category_id', $categoryId);
    }

    if ($restaurant) {
        $query = $query->where('restaurant', $restaurant);
    }

    $foods = $query->get();

    return view('foods.index', compact('foods', 'categoryId', 'restaurant'));
}
    

    public function create()
    {
         $categories = Category::all();

        return view('foods.create', compact('categories'));
    }

    public function store(Request $request)
    {
        
    $validated = $request->validate([
        'name'        => 'required|string|max:255',
        'restaurant'  => 'required|string|max:255',
        'category_id' => 'required|exists:categories,id',
        'price'       => 'nullable|integer|min:0',
    ]);

    Food::create($validated);

    return redirect()->route('foods.index');
    }

    public function show(string $id)
    {
        $food = Food::findOrFail($id);

        return view('foods.show', ['item' => $food]);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

    public function featured()
    {
        $item = Food::findOrFail(1);

        return view('foods.featured', ['item' => $item]);
    }
}