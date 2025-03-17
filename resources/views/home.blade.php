@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Welcome to Laravel Blade & Eloquent ORM Lab</h1>
    <h2>N01616354</h2>

    @if($products->isEmpty())
        <p>No products available.</p>
    @else
        <ul>
            @foreach($products as $product)
                <li>{{ $product->name }} - ${{ $product->price }}</li>
            @endforeach
        </ul>
    @endif
@endsection
