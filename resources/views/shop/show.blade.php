@extends('layouts.site')

@section('content')
    <div class="container margin_top_container">
        <div class="row">
            <div class="col-md-4">
                @if($product->image == null)
                    <img src="{{ asset('assets/common/placeholder.png') }}" alt="product image" height="405" width="324">
                @else
                    <img src="{{ asset('assets/common/$product->image') }}" alt="product image" height="405" width="380">
                @endif
            </div>
            <div class="col-md-7">
                <p class="detail_product_name">{{ $product->name }} &nbsp; <small class="lead">{{ $product->code }}</small></p>

                <p class="detail_product_price">
                     CAD {{ $product->price }}
                </p>

                <div>
                    <p class="detail_product_description"> {{ $product->description }}</p>
                </div>

                <div class="detail_action_block">
                    <input type="text" id="productQnt" class="form-control col-md-1" value="1">
                    <button id="addToCart" class="btn btn-secondary col-md-3">Add to Cart</button>
                </div>
                <div clas="row">
                    <hr />
                    <p>Category:&nbsp; @foreach ($product->categories as $category) {{ $category->name }} @endforeach</p>
                </div>
            </div>
        </div>
        <br />
        <hr />
        <div class="row">
            <div class="col-md-12">
                <h4 class="detail_related_products">Related Products</h4>
            </div>

                @foreach($related as $product)
                    @if($product->image == null)
                        <div class="col-md-3 text-center">
                            <a href="{{ url('shop', $product->slug) }}">
                                <img src="{{ asset('assets/common/placeholder.png') }}" alt="product image" height="300" width="230">
                            </a>
                            @else
                                <img src="{{ asset('assets/common/$product->image') }}" alt="product image" height="300" width="230">
                            @endif
                            {{--<div class="text-center">--}}
                                {{--<p>CAD {{$product->price}} <br /> {{$product->name}}</p>--}}
                                {{--<div>--}}
                                    {{--<button href="#">Add to cart</button>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                            <div class="text-center">
                                <a href="{{ url('shop', $product->slug) }}">
                                    <p class="display_product_name">{{$product->name}}</p>
                                </a>
                                <p class="display_product_price">CAD {{$product->price}}</p>
                            </div>
                        </div>
                    @endforeach

        </div>

    </div>
@endsection