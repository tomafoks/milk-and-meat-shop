@extends('front/layout/layout')

@section('breadcrumb')
	<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
			<li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">На главную</a><span>|</span></li>
				<li>Вход в личный кабинет</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
@endsection

@section('content')

<!-- banner -->

		<div class="w3l_banner_nav_right">
<!-- login -->
		<div class="w3_login">
			<h3>Вход в личный кабинет</h3>

			<div class="w3_login_module">
				<div class="col-12">
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul class="list-unstyled">
								@foreach ($errors->all() as $error)
									<li>{{ $errors }}</li>
								@endforeach
							</ul>
						</div>
					@endif
		
					{{-- @if (session()->has('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
					@endif --}}

					@if (session()->has('error'))
						<div class="alert alert-danger">
							{{ session('error') }}
						</div>						
					@endif
				</div>

				<div class="module form-module">
				  <div class="toggle">
				  </div>
				  <div class="form">
					<h2>Вход в личный кабинет</h2>
					<form action="{{route('login')}}" method="post">
							@csrf
						<input style="" type="email" name="email" placeholder="email" value="{{old('email')}}">
						<input type="password" name="password" placeholder="Password">
						<input type="submit" value="Вход">
					</form>
				  </div>
				  <div class="cta"><a href="#">Забыли свой пароль</a></div>
				</div>
			</div>
		
		</div>
<!-- //login -->
		</div>
		<div class="clearfix"></div>
	</div>
@endsection