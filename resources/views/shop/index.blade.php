@extends('layouts.site')

@section('content')

    <div>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3">This is my store, this is my flowers</h1>
                <p class=" text-center lead">There is nothing more beautiful than my honi, in second place, its flowers.</p>
                <div class="text-center">
                    <a href="{{url('shop/categories')}}">
                        <button type="button" class="btn btn-secondary">See Categories <i></i></button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <section>
        @if(!empty($category))
            <div class="text-center">
                <p class="h2">Featured Products</p>
            </div>
            {{--Show 6 to 8 products on the screen--}}
            {{--loop through that variable and show in the home--}}
            <div class="row">
                @foreach($category->products as $product)
                    @if($product->image == null)
                        <div class="col-md-3 text-center">
                            <a href="{{ url('shop', $product->slug) }}">
                                <img src="{{ asset('assets/common/placeholder.png') }}" alt="product image" height="300" width="230">
                            </a>
                            @else
                                <img src="{{ asset('assets/common/$product->image') }}" alt="product image" height="300" width="230">
                            @endif
                            <div class="text-center">
                                <p>CAD {{$product->price}}</p>
                                <p>{{$product->name}} <button href="#">Add to cart</button></p>

                            </div>
                        </div>

                @endforeach
            </div>
        @endif
        </section>



    </div>
@endsection
