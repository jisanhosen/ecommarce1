@extends('FrontEnd.master')
@section('title')
    Youth Fashion
@endsection
@section('contant')
<div class="banner">
    <div class="matter-banner">
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider">
                    <li>
                        <img src="{{ asset('FrontEnd/') }}/images/1.jpg" alt="">
                        <div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <h2>MEN & WOMEN</h2>
                            <h3>Trousers & Chinos</h3>
                            <h4>UPTO 50%</h4>
                            <p>OFFER</p>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('FrontEnd/') }}/images/3.jpg" alt="">
                        <div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <h2>MEN & WOMEN</h2>
                            <h3>Trousers & Chinos</h3>
                            <h4>UPTO 50%</h4>
                            <p>OFFER</p>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('FrontEnd/') }}/images/2.jpg" alt="">
                        <div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <h2>MEN & WOMEN</h2>
                            <h3>Trousers & Chinos</h3>
                            <h4>UPTO 50%</h4>
                            <p>OFFER</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!--//banner-->
<!--content-->
<div class="content">
    <div class="container">
        <div class="content-top">
            <div class="content-top1">
                <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
                    <div class="col-md1 simpleCart_shelfItem">
                        <a href="single.html">
                            <img class="img-responsive" src="{{ asset('FrontEnd/') }}/images/pi5.png" alt="" />
                        </a>
                        <h3><a href="single.html">Palazzo</a></h3>
                        <div class="price">
                            <h5 class="item_price">$450</h5>
                            <a href="#" class="item_add">Add To Cart</a>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animated wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                    <div class="col-md3">
                        <div class="up-t">
                            <h3>Flat 50% Offer</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
                    <div class="col-md1 simpleCart_shelfItem">
                        <a href="single.html">
                            <img class="img-responsive" src="{{ asset('FrontEnd/') }}/images/pi4.png" alt="" />
                        </a>
                        <h3><a href="single.html">Pant</a></h3>
                        <div class="price">
                            <h5 class="item_price">$300</h5>
                            <a href="#" class="item_add">Add To Cart</a>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="content-top1">
                @foreach($products as $product)
                <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
                    <div class="col-md1 simpleCart_shelfItem">
                        <a href="{{ url('/product-details/'.$product->id) }}">
                            <img class="img-responsive" src="{{ asset($product->product_image) }}" alt="" />
                        </a>
                        <h3><a href="single.html">{{ $product->product_name }}</a></h3>
                        <div class="price">
                            <h5 class="item_price">BDT {{ $product->product_price }}</h5>
                            <a href="#" class="item_add">Add To Cart</a>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!--//content-->
<div class="con-tp">
    <div class="container">
        <div class="col-md-4 con-tp-lft animated wow fadeInLeft" data-wow-delay=".5s">
            <a href="products.html">
                <div class="content-grid-effect slow-zoom vertical">
                    <div class="img-box"><img src="{{ asset('FrontEnd/') }}/images/6.jpg" alt="image" class="img-responsive zoom-img"></div>
                    <div class="info-box">
                        <div class="info-content simpleCart_shelfItem">
                            <h4>30%offer</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 con-tp-lft animated wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
            <a href="products.html">
                <div class="content-grid-effect slow-zoom vertical">
                    <div class="img-box"><img src="{{ asset('FrontEnd/') }}/images/10.jpg" alt="image" class="img-responsive zoom-img"></div>
                    <div class="info-box">
                        <div class="info-content simpleCart_shelfItem">
                            <h4>45%offer</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 con-tp-lft animated wow fadeInRight" data-wow-delay=".5s">
            <a href="products.html">
                <div class="content-grid-effect slow-zoom vertical">
                    <div class="img-box"><img src="{{ asset('FrontEnd/') }}/images/9.jpg" alt="image" class="img-responsive zoom-img"></div>
                    <div class="info-box">
                        <div class="info-content simpleCart_shelfItem">
                            <h4>50%offer</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-4 con-tp-lft animated wow fadeInLeft" data-wow-delay=".5s">
            <a href="products.html">
                <div class="content-grid-effect slow-zoom vertical">
                    <div class="img-box"><img src="{{ asset('FrontEnd/') }}/images/12.jpg" alt="image" class="img-responsive zoom-img"></div>
                    <div class="info-box">
                        <div class="info-content simpleCart_shelfItem">
                            <h4>25%offer</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 con-tp-lft animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
            <a href="products.html">
                <div class="content-grid-effect slow-zoom vertical">
                    <div class="img-box"><img src="{{ asset('FrontEnd/') }}/images/13.jpg" alt="image" class="img-responsive zoom-img"></div>
                    <div class="info-box">
                        <div class="info-content simpleCart_shelfItem">
                            <h4>50%offer</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 con-tp-lft animated wow fadeInRight" data-wow-delay=".5s">
            <a href="products.html">
                <div class="content-grid-effect slow-zoom vertical">
                    <div class="img-box"><img src="{{ asset('FrontEnd/') }}/images/14.jpg" alt="image" class="img-responsive zoom-img"></div>
                    <div class="info-box">
                        <div class="info-content simpleCart_shelfItem">
                            <h4>35%offer</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="c-btm">
    <div class="content-top1">
        <div class="container">
            <div class="col-md-3 col-md-2 animated wow fadeInLeft" data-wow-delay=".5s">
                <div class="col-md1 simpleCart_shelfItem">
                    <a href="single.html">
                        <img class="img-responsive" src="{{ asset('FrontEnd/') }}/images/pi9.png" alt="" />
                    </a>
                    <h3><a href="single.html">Trousers</a></h3>
                    <div class="price">
                        <h5 class="item_price">$300</h5>
                        <a href="#" class="item_add">Add To Cart</a>
                        <div class="clearfix"> </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
                <div class="col-md1 simpleCart_shelfItem">
                    <a href="single.html">
                        <img class="img-responsive" src="{{ asset('FrontEnd/') }}/images/pi10.png" alt="" />
                    </a>
                    <h3><a href="single.html">Formal</a></h3>
                    <div class="price">
                        <h5 class="item_price">$450</h5>
                        <a href="#" class="item_add">Add To Cart</a>
                        <div class="clearfix"> </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
                <div class="col-md1 simpleCart_shelfItem">
                    <a href="single.html">
                        <img class="img-responsive" src="{{ asset('FrontEnd/') }}/images/pi11.png" alt="" />
                    </a>
                    <h3><a href="single.html">Trousers</a></h3>
                    <div class="price">
                        <h5 class="item_price">$350</h5>
                        <a href="#" class="item_add">Add To Cart</a>
                        <div class="clearfix"> </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
                <div class="col-md1 simpleCart_shelfItem">
                    <a href="single.html">
                        <img class="img-responsive" src="{{ asset('FrontEnd/') }}/images/pi12.png" alt="" />
                    </a>
                    <h3><a href="single.html">Formal</a></h3>
                    <div class="price">
                        <h5 class="item_price">$400</h5>
                        <a href="#" class="item_add">Add To Cart</a>
                        <div class="clearfix"> </div>
                    </div>

                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
@endsection