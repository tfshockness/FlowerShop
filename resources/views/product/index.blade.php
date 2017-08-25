@extends('layouts.site')

@section('content')

    <div>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3">This is Everything that I have! :)</h1>
                <p class=" text-center lead">Buy! Buy everything! My flowers need you, and I need your money!</p>
            </div>
        </div>
    </div>

    <div class="container">
        <section>
            <div class="text-center">
                <p class="h2">Flowers</p>
            </div>

            <div class="row">
                @foreach($products as $product)
                    @if($product->image == null)
                        <div class="col-md-3 text-center">
                            <a href="{{ url('product', $product->slug) }}">
                                <img src="{{ asset('assets/common/placeholder.png') }}" alt="product image" height="300" width="230">
                            </a>
                            @else
                                <img src="{{ asset('assets/common/$product->image') }}" alt="product image" height="300" width="230">
                            @endif
                            <div class="text-center">
                                <p>CAD {{$product->price}} <br /> {{$product->name}}</p>
                                <div>
                                    <button href="#">Add to cart</button>
                                </div>

                            </div>
                        </div>

                        @endforeach
            </div>
        </section>



    </div>
@endsection
