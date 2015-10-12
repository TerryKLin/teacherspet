@extends('layouts.master')

@section('title', 'Login | Teacher\'s Pet')

@section('content')

<section class="container sample-question">
	<div class="jumbotron">
	  <h2>Login</h2>
	  {!! Form::open() !!}
		<div class="form-group">
			{!! Form::text('username', '', array('class'=>'form-control','placeholder'=>'Username')) !!}
		</div>
	    <div class="form-group">
	    	{!! Form::password('password', array('class'=>'form-control','placeholder'=>'Password')) !!}
	    </div>

	    {{-- 		{!! Form::checkbox('remember', 'Remember Me') !!}
	  		{!! Form::label('Remember Me') !!} --}}
	  	{!! Form::submit('Login', array('class'=>'btn btn-default')) !!}
	  {!! Form::close() !!}
	</div>
</section>

@endsection
