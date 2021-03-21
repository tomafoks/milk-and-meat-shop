@extends('front/layout/layout')

@section('breadcrumb')
	<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
			<li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">На главную</a><span>|</span></li>
				<li>Вход или Регистрация</li>
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
			<h3>Вход или Регистрация</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Нажми меня</div>
				  </div>
				  <div class="form">
					<h2>Вход в личный кабинет</h2>
					<form action="#" method="post">
						@csrf
					<input type="text" name="Username" placeholder="Username" required=" ">
					  <input type="password" name="Password" placeholder="Password" required=" ">
					  <input type="submit" value="Login">
					</form>
				  </div>
				  <div class="form">
					<h2>Создать личный кабинет</h2>
					<form action="{{route('register.store')}}" method="post">
							@csrf
						<input type="text" name="username" placeholder="Логин" required=" ">
						<input type="password" name="password" placeholder="Пароль" required=" ">
						<input type="password_confirmation" name="password_check" placeholder="Повторить пароль" required=" ">
						<input type="email" name="email" placeholder="Email адрес" required=" ">
						<input type="text" name="phone" placeholder="Номре телефона" required=" ">
						<input type="submit" value="Регистрация">
						</form>
				  </div>
				  <div class="cta"><a href="#">Забыли свой пароль</a></div>
				</div>
			</div>
			<script>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			</script>
		</div>
<!-- //login -->
		</div>
		<div class="clearfix"></div>
	</div>
@endsection