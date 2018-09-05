@extends('FrontEnd.master')
@section('title')
    Product Details
@endsection
@section('contant')
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Single / {{ $productById->product_name }}</li>
            </ol>
        </div>
    </div>
    <div class="single">

        <div class="container">
            <div class="col-md-9">
                <div class="col-md-5 grid">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="{{ asset($productById->product_image) }}">
                                <div class="thumb-image"> <img src="{{ asset($productById->product_image) }}" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                            <li data-thumb="{{ asset($productById->product_image) }}">
                                <div class="thumb-image"> <img src="{{ asset($productById->product_image) }}" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                            <li data-thumb="{{ asset($productById->product_image) }}">
                                <div class="thumb-image"> <img src="{{ asset($productById->product_image) }}" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 single-top-in">
                    <div class="single-para simpleCart_shelfItem">
                        <h2>{{ $productById->product_name }}</h2>
                        <p>{{ $productById->product_short_description }}</p>
                        <div class="star-on">
                            <ul>
                                <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                            </ul>
                            <div class="review">
                                <a href="#"> 3 reviews </a>/
                                <a href="#">  Write a review</a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                        <label  class="add-to item_price">BDT {{ $productById->product_price }}</label>

                        <div class="available">
                            <h6>Available Options :</h6>
                            <ul>

                                <li>Size:<select>
                                        <option>Large</option>
                                        <option>Medium</option>
                                        <option>small</option>
                                        <option>Large</option>
                                        <option>small</option>
                                    </select></li>
                                <li>Cost:
                                    <select>
                                        <option>U.S.Dollar</option>
                                        <option>Euro</option>
                                    </select></li>
                            </ul>
                        </div>
                        <form action="{{ url('/add-to-cart') }}" method="POST">
                            {{ csrf_field() }}
                            <span>Product Quantity:</span>
                            <input type="number" name="qty" value="1" min="1"/>
                            <input type="hidden" name="id" value="{{ $productById->id }}"/><br/><br/>
                            <input type="submit" name="btn" class="btn btn-danger  cart item_add" value="Add TO Cart"/>
                        </form>
                    </div>
                </div>
                <div class="clearfix"> </div>
                <div class="content-top1">
                    @foreach($categoryProducts as $categoryProduct)
                    <div class="col-md-4 col-md4">
                        <div class="col-md1 simpleCart_shelfItem">
                            <a href="{{ url('/product-details/'.$categoryProduct->id) }}">
                                <img class="img-responsive" src="{{ asset($categoryProduct->product_image) }}" alt="" />
                            </a>
                            <h3><a href="single.html">{{ $categoryProduct->product_name }}</a></h3>
                            <div class="price">
                                <h5 class="item_price">BDT {{ $categoryProduct->product_price }}</h5>
                                <a href="#" class="item_add">Add To Cart</a>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!----->
            <div class="col-md-3 product-bottom">
                <!--categories-->
                <div class=" rsidebar span_1_of_left">
                    <h3 class="cate">Categories</h3>
                    <ul class="menu-drop">
                        <li class="item1"><a href="#">Men </a>
                            <ul class="cute">
                                <li class="subitem1"><a href="single.html">Cute Kittens </a></li>
                                <li class="subitem2"><a href="single.html">Strange Stuff </a></li>
                                <li class="subitem3"><a href="single.html">Automatic Fails </a></li>
                            </ul>
                        </li>
                        <li class="item2"><a href="#">Women </a>
                            <ul class="cute">
                                <li class="subitem1"><a href="single.html">Cute Kittens </a></li>
                                <li class="subitem2"><a href="single.html">Strange Stuff </a></li>
                                <li class="subitem3"><a href="single.html">Automatic Fails </a></li>
                            </ul>
                        </li>
                        <li class="item3"><a href="#">Kids</a>
                            <ul class="cute">
                                <li class="subitem1"><a href="single.html">Cute Kittens </a></li>
                                <li class="subitem2"><a href="single.html">Strange Stuff </a></li>
                                <li class="subitem3"><a href="single.html">Automatic Fails</a></li>
                            </ul>
                        </li>
                        <li class="item4"><a href="#">Accesories</a>
                            <ul class="cute">
                                <li class="subitem1"><a href="single.html">Cute Kittens </a></li>
                                <li class="subitem2"><a href="single.html">Strange Stuff </a></li>
                                <li class="subitem3"><a href="single.html">Automatic Fails</a></li>
                            </ul>
                        </li>

                        <li class="item4"><a href="#">Shoes</a>
                            <ul class="cute">
                                <li class="subitem1"><a href="single.html">Cute Kittens </a></li>
                                <li class="subitem2"><a href="single.html">Strange Stuff </a></li>
                                <li class="subitem3"><a href="single.html">Automatic Fails </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--initiate accordion-->
                <script type="text/javascript">
                    $(function() {
                        var menu_ul = $('.menu-drop > li > ul'),
                            menu_a  = $('.menu-drop > li > a');
                        menu_ul.hide();
                        menu_a.click(function(e) {
                            e.preventDefault();
                            if(!$(this).hasClass('active')) {
                                menu_a.removeClass('active');
                                menu_ul.filter(':visible').slideUp('normal');
                                $(this).addClass('active').next().stop(true,true).slideDown('normal');
                            } else {
                                $(this).removeClass('active');
                                $(this).next().stop(true,true).slideUp('normal');
                            }
                        });

                    });
                </script>
                <!--//menu-->
                <!--seller-->
                <div class="product-bottom">
                    <h3 class="cate">Best Sellers</h3>
                    <div class="product-go">
                        <div class=" fashion-grid">
                            <a href="single.html"><img class="img-responsive " src="{{ asset('FrontEnd/') }}/images/pr.jpg" alt=""></a>
                        </div>
                        <div class=" fashion-grid1">
                            <h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
                            <span class=" price-in1"> $40.00</span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="product-go">
                        <div class=" fashion-grid">
                            <a href="single.html"><img class="img-responsive " src="{{ asset('FrontEnd/') }}/images/pr1.jpg" alt=""></a>
                        </div>
                        <div class=" fashion-grid1">
                            <h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
                            <span class=" price-in1"> $40.00</span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="product-go">
                        <div class=" fashion-grid">
                            <a href="single.html"><img class="img-responsive " src="{{ asset('FrontEnd/') }}/images/pr2.jpg" alt=""></a>
                        </div>
                        <div class=" fashion-grid1">
                            <h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
                            <span class=" price-in1"> $40.00</span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="product-go">
                        <div class=" fashion-grid">
                            <a href="single.html"><img class="img-responsive " src="{{ asset('FrontEnd/') }}/images/pr3.jpg" alt=""></a>
                        </div>
                        <div class=" fashion-grid1">
                            <h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
                            <span class=" price-in1"> $40.00</span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>

                <!--//seller-->
                <!--tag-->
                <div class="tag">
                    <h3 class="cate">Tags</h3>
                    <div class="tags">
                        <ul>
                            <li><a href="#">design</a></li>
                            <li><a href="#">fashion</a></li>
                            <li><a href="#">lorem</a></li>
                            <li><a href="#">dress</a></li>
                            <li><a href="#">fashion</a></li>
                            <li><a href="#">dress</a></li>
                            <li><a href="#">design</a></li>
                            <li><a href="#">dress</a></li>
                            <li><a href="#">design</a></li>
                            <li><a href="#">fashion</a></li>
                            <li><a href="#">lorem</a></li>
                            <li><a href="#">dress</a></li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
@endsection