<div class="header-top">
    <div class="container">
        <div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">
            <h1><a href="{{ url('/') }}">Youth <span>Fashion</span></a></h1>
        </div>
        <div class="col-sm-4 world animated wow fadeInRight" data-wow-delay=".5s">
            <div class="cart box_1">
                <a href="{{ url('/show-cart') }}">
                    <h3> <div class="total">
                            <span class="simpleCart_total"></span></div>
                        <img src="{{ asset('FrontEnd/') }}/images/cart.png" alt=""/></h3>
                </a>
                <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

            </div>
        </div>
        <div class="col-sm-2 number animated wow fadeInRight" data-wow-delay=".5s">
            <span><i class="glyphicon glyphicon-phone"></i>085 596 234</span>
            <p>Call me</p>
        </div>
        <div class="col-sm-2 search animated wow fadeInRight" data-wow-delay=".5s">
            <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>