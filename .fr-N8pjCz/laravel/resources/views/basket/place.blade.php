@extends('front/layout/layout')

@section('breadcrumb')
	<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
			<li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">На главную</a><span>|</span></li>
            <li><a href="{{route('basket.index')}}">Корзина</a><span>|</span></li>
				<li>Оформление заказа</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
@endsection

@section('content')
<div class="w3l_banner_nav_right">
    <div class="typo">
        <form action="{{route('basket.confirm')}}" method="POST">
            @csrf
            <h3 class="title">Подтверждение заказа:</h3>
            <div class="alert alert-success" role="alert">
                Общая стоимость заказа: <strong>{{$order->calculateGetFullSum()}}</strong> руб.
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">ФИО</span>
                <input type="text" name="name" class="form-control" placeholder="ФИО" aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Телефона</span>
                <input type="text" name="phone" class="form-control" placeholder="Номер телефона" aria-describedby="basic-addon1">
            </div>
            <div class="pull-right" style="margin-bottom: 10px">
                <h1><button type="submit" class="label label-success">Заказать</button></h1>
            </div>
        </form>
    </div>
</div>
</div>
   <div class="clearfix"> </div>


@endsection
