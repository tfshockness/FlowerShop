@extends('layouts.site')

@section('content')

    <div>
        <div class="jumbotron jumbotron-fluid main_welcome">
            <div class="container">
                <p class=" text-center lead main_text_small"> Nothing more beautiful than my honi</p>
                <h1 class="display-3 text-center main_text_large">PERFECT GIFT</h1>
                <p class=" text-center lead main_text_small">beautiful than honi</p>
                <div class="text-center">
                    <a href="{{url('shop/categories')}}">
                        <button type="button" class="btn main_welcome_btn col-md-2">See Categories</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <section>
        @if(!empty($category))
            <div class="text-center">
                {{--<p class="h2">Featured Products</p>--}}
            </div>
            {{--Show 6 to 8 products on the screen--}}
            {{--loop through that variable and show in the home--}}
            <div class="row">
                @foreach($category->products as $product)
                    @if($product->image == null)
                        <div class="col-md-4 text-center">
                            <a href="{{ url('shop', $product->slug) }}">
                                <img src="{{ asset('assets/common/placeholder.png') }}" alt="product image" height="300" width="230">
                            </a>
                            @else
                                <img src="{{ asset('assets/common/$product->image') }}" alt="product image" height="300" width="230">
                            @endif
                            <div class="text-center">
                                <a href="{{ url('shop', $product->slug) }}">
                                    <p class="display_product_name">{{$product->name}}</p>
                                </a>
                                <p class="display_product_price">CAD {{$product->price}}</p>
                                {{--<button href="#">Add to cart</button></p>--}}
                            </div>
                        </div>

                @endforeach
            </div>
        @endif
        </section>

    </div>


@endsection
