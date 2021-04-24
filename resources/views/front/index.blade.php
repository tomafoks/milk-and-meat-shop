@extends('front/layout/layout')


@section('content')

    <div class="w3l_banner_nav_right">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="w3l_banner_nav_right_banner">
                            <h3>Делаем продукты <span>из свежего</span>молока</h3>
                            <div class="more">
                                <a href="products.html" class="button--saqui button--round-l button--text-thick"
                                    data-text="Купить сейчас">Купить сейчас</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_right_banner1">
                            <h3> Мясо <span> домяшнего</span> производства</h3>
                            <div class="more">
                                <a href="products.html" class="button--saqui button--round-l button--text-thick"
                                data-text="Купить сейчас">Купить сейчас</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_right_banner2">
                            <h3>Доставка <i>от </i> 1000 руб.</h3>
                            <div class="more">
                                <a href="products.html" class="button--saqui button--round-l button--text-thick"
                                data-text="Купить сейчас">Купить сейчас</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- flexSlider -->
        <link rel="stylesheet" href="{{asset('css/flexslider.css') }}" type="text/css" media="screen"
            property="" />
        <script defer src="{{asset('js/jquery.flexslider.js') }}"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider) {
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
                @foreach ($newProducts as $product)
                <div class="col-md-3 w3ls_w3l_banner_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                            <div class="agile_top_brand_left_grid_pos">
                                @if ($product->recommend)
                                    <h4 class="">
                                        <span class="label label-success">Рекоммендуем</span>
                                    </h4>
                                @endif
                                @if ($product->new)
                                    <h4 class="">
                                        <span class="label label-danger">Новинка</span>
                                    </h4>
                                @endif
                                @if ($product->hit)
                                    <h4 class="">
                                        <span class="label label-primary">Хит</span>
                                    </h4>
                                @endif
                            </div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="{{ route('single.product', $product->id) }}"><img
                                                    src="{{ $product->getImage() }}" alt=" "
                                                    class="img-responsive" /></a>
                                            <p>{{ $product->title }}</p>
                                            <h4>{{ $product->price }} руб.<span>{{-- перечеркнутая цена --}}</span>
                                            </h4>
                                        </div>
                                        <div class="snipcart-details">
                                            <form action="{{ route('basket.add', $product->id) }}" method="post">
                                                @csrf
                                                @if ($product->isAvailable())
                                                    <fieldset>
                                                        <input type="hidden" name="quantity" value="1">
                                                        <input type="submit" name="submit" value="В корзину"
                                                            class="button" />
                                                    </fieldset>
                                                @else
                                                    <fieldset>
                                                        <p>
                                                            ТОВАР ЗАКОНЧИЛСЯ!
                                                        </p>
                                                    </fieldset>
                                                @endif
                                            </form>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //top-brands -->

@endsection
