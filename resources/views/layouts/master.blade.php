<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="{{ asset('images/graduation-cap-64.png') }}">

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<title>@yield('title')</title>
</head>
<body>

	@unless(Auth::check())
		<div class="full-width-bg">
	@endif

	<header class="main-header">
		<nav class="container main-nav">
		  <div class="main-nav--container">

			@if(Auth::check())
				<a class="logo--main-nav blue-text hover-grey" href="{{ url('/') }}"><i class="fa fa-graduation-cap"></i> Teacher's Pet</a>
			@else
				<a class="logo--main-nav white-text hover-blue" href="{{ url('/') }}"><i class="fa fa-graduation-cap"></i> Teacher's Pet</a>
			@endif

			<div class="nav-group">

			@if(Auth::check())
				<a href="{{ url('ask') }}" class="blue-text hover-grey">Ask</a>
				<a href="{{ url('logout') }}" class="blue-text hover-grey">Log Out</a>
			@else
				<a href="{{ url('register') }}" class="white-text hover-blue">Register</a>
				<a href="{{ url('login') }}" class="white-text hover-blue">Log In</a>
			@endif

			</div>
		  </div>{{-- .container-fluid --}}
		</nav>
	</header>

	<div class="container">

		<div class="row">
			<div class="col-md-8">
				@if ($errors->any())
					@foreach($errors->all() as $error)
		    			<div class="alert alert-danger">{{ $error }}</div>
		    		@endforeach
				@endif

				@yield('content')
			</div>
		</div>
	</div>

	@if(Auth::check())
		</div>{{-- .full-width-bg --}}
	@endif

	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>