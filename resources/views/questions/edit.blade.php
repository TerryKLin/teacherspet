@extends('layouts.master')

@section('title', 'Edit | Teacher\'s Pet')

@section('content')

<h3>
	<span>Edit Question</span>
	<a href="{{ url('questions/' . $question->id . '/delete') }}" class="btn btn-danger pull-right"><i class="fa fa-trash-o"></i> Delete</a>
</h3>

{!! Form::model($question, array('url' => 'questions/' . $question->id . '/edit', 'method' => 'patch'), $question->id) !!}
	@include('forms.question')
	<div class="form-group">
		{!! Form::submit('Save changes', array('class' => 'btn btn-primary btn-block')) !!}
	</div>
{!! Form::close() !!}

@endsection