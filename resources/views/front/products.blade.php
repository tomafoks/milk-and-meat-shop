@extends('front/layout/layout')

@section('breadcrumb')
	<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
			<li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">На главную</a><span>|</span></li>
				<li>Все товары</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
@endsection

@section('content')


<!-- banner -->
		<div class="w3l_banner_nav_right">
			<div class="w3l_banner_nav_right_banner3">
				<h3>Всегда свежие продукты<span class="blink_me"></span></h3>
			</div>
			<div class="w3ls_w3l_banner_nav_right_grid">
				<h3>Весь товар</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1">
					<h6>молокочные продукты</h6>

					@foreach ($milkProducts as $product)
					<div class="col-md-3 w3ls_w3l_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="laravel/public/images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
										<a href="{{route('single.product', 1)}}"><img src="{{$product->getImage()}}" alt=" " class="img-responsive" /></a>
										<p>{{$product->title}}</p>
										<h4>{{$product->price}}<span>{{$product->price+150}}</span></h4>
										</div>
										<div class="snipcart-details">
											<form action="{{route('basket.add', $product->id)}}" method="post">
												@csrf
												@if ($product->isAvailable())
													<fieldset>
														<input type="hidden" name="quantity" value="1">
														<input type="submit" name="submit" value="В корзину" class="button" />
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
				<div class="w3ls_w3l_banner_nav_right_grid1">
					<h6>мясные продукты</h6>
					@foreach ($meetProducts as $product)
					<div class="col-md-3 w3ls_w3l_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="laravel/public/images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
										<a href="{{route('single.product', 1)}}"><img src="{{$product->getImage()}}" alt=" " class="img-responsive" /></a>
										<p>{{$product->title}}</p>
											<h4>{{$product->price}} <span>{{$product->price+150}}</span></h4>
										</div>
										<div class="snipcart-details">
											<form action="{{route('basket.add', $product->id)}}" method="post">
												@csrf
												@if ($product->isAvailable())
													<fieldset>
														<input type="hidden" name="quantity" value="1">
														<input type="submit" name="submit" value="В корзину" class="button" />
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
		<div class="clearfix"></div>
<!-- //banner -->
@endsection
