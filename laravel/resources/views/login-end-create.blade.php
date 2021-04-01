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
            <div class="container mt-2">
                <div class="row">
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

                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                    </div>
                </div>
            </div>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Нажми меня</div>
				  </div>
				  <div class="form">
					<h2>Вход в личный кабинет</h2>
					<form>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
				  </div>
				  <div class="form">
					<h2>Создать личный кабинет</h2>
					<form action="{{route('register.store')}}" method="post">
							@csrf
						<input type="text" value="{{ old('name') }}" name="name" placeholder="Логин" required=" ">
						<input type="password" name="password" placeholder="Пароль" required=" ">
						<input type="password" name="password_confirmation" placeholder="Повторить пароль" required=" ">
						<input type="email" name="email" value="{{ old('email') }}" placeholder="Email адрес" required=" ">
						<input type="text" name="phone" value="{{ old('phone') }}" placeholder="Номре телефона" required=" ">
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
