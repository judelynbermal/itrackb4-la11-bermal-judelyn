@extends('layouts.app')
@section('title', $item['name'])
@section('content')

    <div class="card">
        <div class="card-body">

            <h2 class="card-title">{{ $item['name'] }}</h2>

            <p><strong>ID:</strong> {{ $item['id'] }}</p>
            <p><strong>Food:</strong> {{ $item['name'] }}</p>
            <p><strong>Restaurant:</strong> {{ $item['restaurant'] }}</p>
            <p><strong>Category:</strong> {{ $item->category->name }}</p>
            <p><strong>Price:</strong> ₱{{ $item['price'] }}</p>

            <a href="{{ route('foods.index') }}" class="btn btn-primary">
                Back to Food List
            </a>

        </div>
    </div>

@endsection