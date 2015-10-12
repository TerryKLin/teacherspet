@extends('layouts.master')

@section('title', 'Register | Teacher\'s Pet')

@section('content')

<section class="container sample-question">
	<div class="jumbotron">
	  <h2>Register</h2>
	  {!! Form::open() !!}
		<div class="form-group">
			{!! Form::text('username', '', array('class'=>'form-control','placeholder'=>'Username')) !!}
		</div>
	    <div class="form-group">
	    	{!! Form::email('email', null, array('class'=>'form-control','placeholder'=>'Email'))  !!}
	    </div>
	    <div class="form-group">
	    	{!! Form::password('password', array('class'=>'form-control','placeholder'=>'Password')) !!}
	    </div>

	    <div class="form-group">
	    	{!! Form::password('password_confirmation', array('class'=>'form-control','placeholder'=>'Confirm Password')) !!}
	    </div>

	    {!! Form::submit('Register', array('class'=>'btn btn-default')) !!}
	  {!! Form::close() !!}
	
	</div>
</section>

@endsection
