@extends('layouts.main')

@section('content')
    <div class="contshow">
        <figure>
            <img src="{{ $product->image }}" alt="">
        </figure>
        <div class="text">
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <div>{{ $product->price }}</div>
            <a href="{{ route('products.index') }}">Home</a>
        </div>
        
    </div>

    

@endsection
