@extends('layouts.site')

@section('content')

    <div>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3">This is my store, this is my flowers</h1>
                <p class=" text-center lead">There is nothing more beautiful than my honi, in second place, its flowers.</p>
                <div class="text-center">
                    <a href="{{url('shop/categories')}}">
                        <button type="button" class="btn btn-outline-secondary">See Categories <i></i></button>
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
                <div class="col-md-3 col-lg-4 col-xl-6 mb-r dark-grey-text">
                    <h6 class="title font-bold"><strong>Hannah & Samuel Flower Shop</strong></h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        We are a full service florists providing Flower & Gift Delivery to the Vancouver area over 18 years.
                        Send flowers for any occasion. We offer a large variety of fresh flowers and gifts.
                        <br />Enjoy the convenience of safe and secure ordering online 24 hours a day.
                    </p>
                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-md-4 col-lg-3 col-xl-3 dark-grey-text">
                    <h6 class="title font-bold"><strong>Location</strong></h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p><i class="fa fa-home mr-3"></i> 2130 Western Pky, Vancouver, BC V6T 1V6</p>
                    <p><i class="fa fa-envelope mr-3"></i> hsflowers@gmail.com</p>
                    <p><i class="fa fa-phone mr-3"></i> + 01 604-228-0113</p>
                </div>
                <!--/.Second column-->

                <!--Third column-->
                {{--<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-r dark-grey-text">--}}
                    {{--<h6 class="title font-bold"><strong>Useful links</strong></h6>--}}
                    {{--<hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">--}}
                    {{--<p><a href="#!" class="dark-grey-text">Your Account</a></p>--}}
                    {{--<p><a href="#!" class="dark-grey-text">Become an Affiliate</a></p>--}}
                    {{--<p><a href="#!" class="dark-grey-text">Shipping Rates</a></p>--}}
                    {{--<p><a href="#!" class="dark-grey-text">Help</a></p>--}}
                {{--</div>--}}
                <!--/.Third column-->

                <!--Fourth column-->

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-r dark-grey-text">
                    <h6 class="title font-bold"><strong>Categories</strong></h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p><a href="#!" class="dark-grey-text">Any Occasion</a></p>
                    <p><a href="#!" class="dark-grey-text">Love & Romance</a></p>
                    <p><a href="#!" class="dark-grey-text">Sympathy</a></p>
                    <p><a href="#!" class="dark-grey-text">Office Plants</a></p>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!-- Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2017 Copyright Hannah & Samuel Flower Shop</strong></a>
            </div>
        </div>
        <!--/.Copyright -->

    </footer>
    <!--/.Footer-->
@endsection
