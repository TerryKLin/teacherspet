@extends('layouts.master')

@section('title', 'Login | Teacher\'s Pet')

@section('content')

<div class="row">
	<div class="col-lg-6 col-lg-offset-6 col-xs-12">
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
	</div>
</div>

@endsection
