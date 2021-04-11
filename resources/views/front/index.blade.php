@extends('front/layout/layout')


@section('content')

<div class="w3l_banner_nav_right">
    <section class="slider">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <div class="w3l_banner_nav_right_banner">
                        <h3>Make your <span>food</span> with Spicy.</h3>
                        <div class="more">
                            <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3l_banner_nav_right_banner1">
                        <h3>Make your <span>food</span> with Spicy.</h3>
                        <div class="more">
                            <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3l_banner_nav_right_banner2">
                        <h3>upto <i>50%</i> off.</h3>
                        <div class="more">
                            <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- flexSlider -->
        <link rel="stylesheet" href="laravel/public/css/flexslider.css" type="text/css" media="screen" property="" />
        <script defer src="laravel/public/js/jquery.flexslider.js"></script>
        <script type="text/javascript">
        $(window).load(function(){
          $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
              $('body').removeClass('loading');
            }
          });
        });
      </script>
    <!-- //flexSlider -->
</div>
<div class="clearfix"></div>
</div>
<!-- top-brands -->
<div class="top-brands">
<div class="container">
    <h3>Горячие предложения</h3>
    <div class="agile_top_brands_grids">
        <div class="col-md-3 top_brand_left">
            <div class="hover14 column">
                <div class="agile_top_brand_left_grid">
                    <div class="tag"><img src="laravel/public/images/tag.png" alt=" " class="img-responsive" /></div>
                    <div class="agile_top_brand_left_grid1">
                        <figure>
                            <div class="snipcart-item block" >
                                <div class="snipcart-thumb">
                                    <a href="single.html"><img title=" " alt=" " src="laravel/public/images/1.png" /></a>
                                    <p>fortune sunflower oil</p>
                                    <h4>$7.99 <span>$10.00</span></h4>
                                </div>
                                <div class="snipcart-details top_brand_home_details">
                                    <form action="checkout.html" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="Fortune Sunflower Oil" />
                                            <input type="hidden" name="amount" value="7.99" />
                                            <input type="hidden" name="discount_amount" value="1.00" />
                                            <input type="hidden" name="currency_code" value="USD" />
                                            <input type="hidden" name="return" value=" " />
                                            <input type="hidden" name="cancel_return" value=" " />
                                            <input type="submit" name="submit" value="Add to cart" class="button" />
                                        </fieldset>

                                    </form>

                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 top_brand_left">
            <div class="hover14 column">
                <div class="agile_top_brand_left_grid">
                    <div class="agile_top_brand_left_grid1">
                        <figure>
                            <div class="snipcart-item block" >
                                <div class="snipcart-thumb">
                                    <a href="single.html"><img title=" " alt=" " src="laravel/public/images/3.png" /></a>
                                    <p>basmati rise (5 Kg)</p>
                                    <h4>$11.99 <span>$15.00</span></h4>
                                </div>
                                <div class="snipcart-details top_brand_home_details">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="basmati rise" />
                                            <input type="hidden" name="amount" value="11.99" />
                                            <input type="hidden" name="discount_amount" value="1.00" />
                                            <input type="hidden" name="currency_code" value="USD" />
                                            <input type="hidden" name="return" value=" " />
                                            <input type="hidden" name="cancel_return" value=" " />
                                            <input type="submit" name="submit" value="Add to cart" class="button" />
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 top_brand_left">
            <div class="hover14 column">
                <div class="agile_top_brand_left_grid">
                    <div class="agile_top_brand_left_grid_pos">
                        <img src="laravel/public/images/offer.png" alt=" " class="img-responsive" />
                    </div>
                    <div class="agile_top_brand_left_grid1">
                        <figure>
                            <div class="snipcart-item block">
                                <div class="snipcart-thumb">
                                    <a href="single.html"><img src="laravel/public/images/2.png" alt=" " class="img-responsive" /></a>
                                    <p>Pepsi soft drink (2 Ltr)</p>
                                    <h4>$8.00 <span>$10.00</span></h4>
                                </div>
                                <div class="snipcart-details top_brand_home_details">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="Pepsi soft drink" />
                                            <input type="hidden" name="amount" value="8.00" />
                                            <input type="hidden" name="discount_amount" value="1.00" />
                                            <input type="hidden" name="currency_code" value="USD" />
                                            <input type="hidden" name="return" value=" " />
                                            <input type="hidden" name="cancel_return" value=" " />
                                            <input type="submit" name="submit" value="Add to cart" class="button" />
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 top_brand_left">
            <div class="hover14 column">
                <div class="agile_top_brand_left_grid">
                    <div class="agile_top_brand_left_grid_pos">
                        <img src="laravel/public/images/offer.png" alt=" " class="img-responsive" />
                    </div>
                    <div class="agile_top_brand_left_grid1">
                        <figure>
                            <div class="snipcart-item block">
                                <div class="snipcart-thumb">
                                    <a href="single.html"><img src="laravel/public/images/4.png" alt=" " class="img-responsive" /></a>
                                    <p>dogs food (4 Kg)</p>
                                    <h4>$9.00 <span>$11.00</span></h4>
                                </div>
                                <div class="snipcart-details top_brand_home_details">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="dogs food" />
                                            <input type="hidden" name="amount" value="9.00" />
                                            <input type="hidden" name="discount_amount" value="1.00" />
                                            <input type="hidden" name="currency_code" value="USD" />
                                            <input type="hidden" name="return" value=" " />
                                            <input type="hidden" name="cancel_return" value=" " />
                                            <input type="submit" name="submit" value="Add to cart" class="button" />
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
</div>
<!-- //top-brands -->

@endsection
