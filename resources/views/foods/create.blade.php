@extends('layouts.app')
@section('title', 'Add Food')
@section('content')
<h2>Add Food</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('foods.store') }}">
    @csrf

    <div class="mb-3">
        <label class="form-label">Food</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Restaurant</label>
        <input type="text" name="restaurant" class="form-control" value="{{ old('restaurant') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Category</label>
        <select name="category_id" class="form-select">
            <option value="">-- Select --</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    @selected(old('category_id') == $category->id)
                >{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" name="price" class="form-control" value="{{ old('price') }}">
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{ route('foods.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection