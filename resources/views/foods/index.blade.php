@extends('layouts.app')
@section('title', 'Food Products')
@section('content')
<h2>My Food Products</h2>

<p>Category ID: {{ $categoryId ?: 'all' }} | Restaurant: {{ $restaurant ?: 'all' }}</p>

<a href="{{ route('foods.create') }}" class="btn btn-success mb-2">+ Add Food</a>

<a href="{{ route('foods.index', ['category_id'=>1]) }}">Burger</a>
<a href="{{ route('foods.index', ['category_id'=>2]) }}">Breakfast</a>
<a href="{{ route('foods.index', ['category_id'=>3]) }}">Pasta</a>
<a href="{{ route('foods.index', ['category_id'=>4]) }}">Seafood</a>
<a href="{{ route('foods.index', ['category_id'=>5]) }}">Noodles</a>
<a href="{{ route('foods.index', ['category_id'=>6]) }}">Sandwich</a>


<a href="{{ route('foods.index', ['restaurant'=>'Jollibee']) }}">Jollibee</a>
<a href="{{ route('foods.index', ['restaurant'=>'Tapsi ni Vivian']) }}">Tapsi ni Vivian</a>
<a href="{{ route('foods.index', ['restaurant'=>"McDonald's"]) }}">McDonald's</a>
<a href="{{ route('foods.index', ['restaurant'=>'Lucky Me']) }}">Lucky Me</a>

<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Food</th>
                <th>Restaurant</th>
                <th>Category</th>
                <th>Price</th>
            </tr>
        </thead>
    <tbody>
@forelse ($foods as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item['id'] }}</td>
        <td>
            <a href="{{ route('foods.show', $item['id']) }}">
            {{ $item['name'] }}
            </a>
        </td>
        <td>{{ $item['restaurant'] }}</td>
        <td>{{ $item->category->name }}</td>
        <td>
        ₱{{ $item['price'] }}
@if ($item['price'] >= 150)
    <span class="badge bg-warning text-dark">
    Premium
    </span>
@else
    <span class="badge bg-success">
    Affordable
    </span>
@endif
</td>
<td>
    <form action="{{ route('foods.destroy', $item) }}" method="POST"
      onsubmit="return confirm('Delete this record?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
    </form>


    </td>
    </tr>
@empty
    <tr>
    <td colspan="6" class="text-center">
        No food products are available right now.
    </td>
    </tr>
@endforelse
</tbody>
</table>
</div>

@endsection