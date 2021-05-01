@extends('front/layout/layout')

@section('breadcrumb')
	<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
      <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">На главную</a><span>|</span></li>
      <li><a href="{{route('orders')}}">История заказов</a><span>|</span></li>
			<li>Заказ</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
@endsection

@section('content')
<div class="w3l_banner_nav_right">
    <div class="typo">
        <div class="col-md-10">
            <h3 class="title">Заказ № {{$order->id}}</h3>
        <p class="animi">Дата заказа от {{$order->created_at}}</p>
            <table class="table table-bordered table-responsive">
              <thead>
                <tr>
                  <th>Название</th>
                  <th>Кол-во</th>
                  <th>Цена</th>
                  <th>Фото</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($products as $product)
              <tr>
                  <td><a href="{{route('single.product', $product->id)}}">{{$product->title}}</a></td>
                  <td>{{$product->getCoutnForBasket()}}</td>
                  <td>{{$product->getPriceForCount()}} руб.</td>
                  <td>
                    <img src="{{$product->getImage()}}" width="200" alt="фото">
                  </td>
                </tr>
                  @endforeach
              </tbody>
              <tr>
                <td>Итого: </td>
                <td>{{$order->calculateGetFullSum()}} руб.</td>
              </tr>
            </table>
        </div>
    </div>
</div>
   <div class="clearfix"> </div>


@endsection
