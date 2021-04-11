@extends('front/layout/layout')

@section('breadcrumb')
<!-- products-breadcrumb -->
<div class="products-breadcrumb">
	<div class="container">
		<ul>
			<li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">На главную</a><span>|</span></li>
			<li>Страница товара</li>
		</ul>
	</div>
</div>
<!-- //products-breadcrumb -->
@endsection

@section('content')
<!-- //header -->

<div class="w3l_banner_nav_right">
	<div class="w3l_banner_nav_right_banner3">
		<h3>Best Deals For New Products<span class="blink_me"></span></h3>
	</div>
	<div class="agileinfo_single">
		<h5>{{$product->title}}</h5>
		<div class="col-md-4 agileinfo_single_left">
			<img id="example" src="{{$product->getImage()}}" alt=" " class="img-responsive" />
		</div>
		<div class="col-md-8 agileinfo_single_right">
			<div class="rating1">
				<span class="starRating">
					<input id="rating5" type="radio" name="rating" value="5">
					<label for="rating5">5</label>
					<input id="rating4" type="radio" name="rating" value="4">
					<label for="rating4">4</label>
					<input id="rating3" type="radio" name="rating" value="3" checked>
					<label for="rating3">3</label>
					<input id="rating2" type="radio" name="rating" value="2">
					<label for="rating2">2</label>
					<input id="rating1" type="radio" name="rating" value="1">
					<label for="rating1">1</label>
				</span>
			</div>
			<div class="w3agile_description">
				<h4>Описание :</h4>
				<p>{{$product->description}}</p>
			</div>
			<div class="snipcart-item block">
				<div class="snipcart-thumb agileinfo_single_right_snipcart">
					<h4>{{$product->price}} <span>$25.00</span></h4>
				</div>
				<div class="snipcart-details agileinfo_single_right_details">
					<form action="{{route('basket.add', $product->id)}}" method="post">
						@csrf
						<fieldset>
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
						</fieldset>
					</form>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="clearfix"></div>
<!-- //banner -->
<!-- brands -->
<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_popular">
	<div class="container">
		<h3>Популярные товары</h3>
		<div class="w3ls_w3l_banner_nav_right_grid1">
			<h6>молокочные продукты</h6>

			@foreach ($milkProducts as $product)
			<div class="col-md-3 w3ls_w3l_banner_left">
				<div class="hover14 column">
					<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
						<div class="agile_top_brand_left_grid_pos">
							<img src="images/offer.png" alt=" " class="img-responsive" />
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
											<fieldset>
												<input type="hidden" name="quantity" value="1">
												<input type="submit" name="submit" value="В корзину" class="button" />
											</fieldset>
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
							<img src="images/offer.png" alt=" " class="img-responsive" />
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
											<fieldset>
												<input type="hidden" name="quantity" value="1">
												<input type="submit" name="submit" value="В корзину" class="button" />
											</fieldset>
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
<!-- //brands -->
@endsection