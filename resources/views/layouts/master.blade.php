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
	<header class="main-header">
		<nav class="container main-nav">
		  <div class="main-nav--container">

			<a class="logo--main-nav blue-text hover-grey" href="{{ url('/') }}"><i class="fa fa-graduation-cap"></i> Teacher's Pet</a>

			<div class="nav-group">
				<a href="{{ url('ask') }}" class="blue-text hover-grey">Ask</a>
				<a href="{{ url('logout') }}" class="blue-text hover-grey">Log Out</a>
			</div>
		  </div>
		</nav>
	</header>

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				@yield('content')
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>