@extends('layouts.main')

@section('content')

<div class="container">

  
    @foreach ($products as $product)

        
           
               
                <div class="card p-5">
                    <figure>
                        <img src="{{ $product->image }}" alt="">
                    </figure>
                    <h2>{{ $product->name }}</h2>
                    <div>{{ $product->price }}</div>
                    <a href="{{ route('products.show', ['product' => $product->id]) }}">Dettagli</a>
                </div>
           
                @endforeach
      
        
        </div>
       
 
</div>

@endsection