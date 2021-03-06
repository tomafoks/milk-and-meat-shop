@extends('front/layout/layout')

@section('breadcrumb')
	<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
			<li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">На главную</a><span>|</span></li>
			<li><a href="{{route('products')}}">Весь товар</a><span>|</span></li>
				<li>Мясные продукты</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
@endsection

@section('content')


		<div class="w3l_banner_nav_right">
			<div class="w3l_banner_nav_right_banner8">

			</div>
			<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
				<h3 class="w3l_fruit">Мясные продукты</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg">

					@foreach ($meetProducts as $product)
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
										<a href="{{route('single.product', 1)}}"><img src="{{$product->getImage()}}" alt=" " class="img-responsive" /></a>
										<p>{{$product->title}}</p>
										<h4>{{$product->price}} руб.<span>{{-- перечеркнутая цена --}}</span></h4>
										</div>
										<div class="snipcart-details">
											<form action="{{ route('basket.add', $product->id) }}" method="post">
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
	</div>
<!-- //banner -->
@endsection
