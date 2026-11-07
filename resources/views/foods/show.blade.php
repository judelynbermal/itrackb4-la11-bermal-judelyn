@extends('layouts.app')
@section('title', $food['name'])
@section('content')

    <div class="card">
        <div class="card-body">

            <h2 class="card-title">{{ $food['name'] }}</h2>

            <p><strong>ID:</strong> {{ $food['id'] }}</p>
            <p><strong>Food:</strong> {{ $food['name'] }}</p>
            <p><strong>Restaurant:</strong> {{ $food['restaurant'] }}</p>
            <p><strong>Category:</strong> {{ $food->category->name }}</p>
            <p><strong>Price:</strong> ₱{{ $food['price'] }}</p>

            <a href="{{ route('foods.index') }}" class="btn btn-primary">
                Back to Food List
            </a>

        </div>
    </div>

@endsection