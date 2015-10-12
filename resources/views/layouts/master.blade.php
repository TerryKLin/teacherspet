<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<title>@yield('title')</title>
</head>
<body>
	<header class="full-width-landing">
		
		<nav class="container main-nav">
		  <div class="main-nav--container">
			<a class="logo--main-nav" href="{{ url('/') }}"><i class="fa fa-graduation-cap"></i> Teacher's Pet</a>
			<div class="nav-group">

			@if(Auth::check())
				<a href="logout">Log Out</a>
			@else
				<a href="register">Register</a>
				<a href="login">Log In</a>
			@endif


			@if ($errors->any())
        		{{ implode('', $errors->all('<div>:message</div>')) }}
			@endif

			</div>
		  </div><!-- /.container-fluid -->
		</nav>

		@yield('content')

	</header>

	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>