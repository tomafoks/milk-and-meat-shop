@extends('front/layout/layout')

@section('breadcrumb')
	<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
			<li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">На главную</a><span>|</span></li>
				<li>Корзина</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
@endsection

@section('content')
<div class="w3l_banner_nav_right">
    <div class="typo">
        <div class="col-md-10">
            <h3 class="title">Корзина</h3>
            <p class="animi">Ваша корзина с товарами для оформления заказа</p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Наименование</th>
                        <th>Описание</th>
                        <th>Кол-во</th>
                        <th>Цена за ед.</th>
                        <th>Стоимость</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->products as $product)
                    <tr>
                        <td>
                            <a href="{{route('single.product', $product->id)}}">{{$product->title}}</a>
                        </td>
                        <td>{{$product->description}}</td>
                        <td>
                            <form action="{{route('basket.add', $product->id)}}" method="post">
                                @csrf
                                <button type="submit" class="btn-success"><i class="fa fa-plus-square"></i></button>
                            </form>
                            {{$product->pivot->count}} 
                            <form action="{{route('basket.remove', $product->id)}}" method="post">
                                @csrf
                                <button type="submit" class="btn-danger"><i class="fa fa-minus-square"></i></button>
                            </form>
                        </td>
                        <td><strong>{{$product->price}}</strong> руб.</td>
                        <td><strong>{{$product->getPriceForCount()}}</strong> руб.</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="4">Общая стоимость:</td>
                        <td>
                            <span class="badge">{{$order->getFullSum()}} руб.</span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="pull-right" style="margin-bottom: 10px">
                <h1><a href="{{route('basket.place')}}"><span class="label label-success">Оформить заказ</span></a></h1>
            </div>
        </div>
    </div>
</div>
   <div class="clearfix"> </div>


@endsection
