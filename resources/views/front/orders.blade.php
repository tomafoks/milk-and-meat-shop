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
            <h3 class="title">История заказов</h3>
            <p class="animi">Вашы предыдущие заказы</p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">id</th>
                        <th>ФИО</th> 
                        <th>Номер телефона</th>
                        <th>Дата</th>
                        <th>Сумма</th>
                        <th style="width: 40px">Действие</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($orders as $order)
                    <tr>
                        <td>{{$order->user_id}}</td>
                        <td>{{$order->name}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->created_at->format('H:i:s d/m/Y')}}</td>
                        <td>{{$order->calculateGetFullSum()}}</td>
                        <td>
                        <a href="{{route('orders.show', $order)}}" class="btn btn-info btn-sm float-left mr-1">
                                <i class="fas fa-pencil-alt">Открыть</i>
                        </a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
   <div class="clearfix"> </div>


@endsection
