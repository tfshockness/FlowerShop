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
                        <button type="button" class="btn btn-secondary main_welcome_btn">See Categories</button>
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
                                <p class="display_product_price">$ {{$product->price}}</p>
                                {{--<button href="#">Add to cart</button></p>--}}
                            </div>
                        </div>

                @endforeach
            </div>
        @endif
        </section>

    </div>

    <!--Footer section-->
    <footer class="page-footer footer_container">
        <div class="container mt-5 mb-4 text-center text-md-left">
            <div class="row mt-3">
                <!--First column-->
                <div class="col-md-6 col-lg-6 col-xl-6 mb-r dark-grey-text">
                    <h6 class="title font-bold"><strong>Hannah & Samuel Flower Shop</strong></h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto footer_title_accent">
                    <p>
                        We are a full service florists providing Flower & Gift Delivery to the Vancouver area over 18 years.
                        Send flowers for any occasion. We offer a large variety of fresh flowers and gifts.
                        <br />Enjoy the convenience of safe and secure ordering online 24 hours a day.
                    </p>
                </div>
                <!--First column-->

                <!--Second column-->
                <div class="col-md-6 col-lg-6 col-xl-6 dark-grey-text footer_second_column">
                    <h6 class="title font-bold"><strong>Location</strong></h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto footer_title_accent">
                    <p><i class="fa fa-home mr-2"></i> 2130 Western Pky, Vancouver, BC V6T 1V6</p>
                    <p><i class="fa fa-envelope mr-2"></i> <a href="mailto:hsflowers@gmail.com">Send Email</a> </p>
                    <p><i class="fa fa-phone mr-2"></i> + 01 604-228-0113</p>
                </div>
                <!--Second column-->
            </div>
            <!-- row mt-3 -->
        </div>
        <!-- container -->
        <!--Footer Links-->
        <!-- Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2017 Hannah & Samuel Flower Shop. Developed by <a target="_blank" href="http://timoshockness.com">Timoteo</a> and <a target="_blank" href="http://kateyeeum.com">Kate</a>
            </div>
        </div>
        <!--Copyright -->

    </footer>
    <!--/.Footer-->
@endsection
