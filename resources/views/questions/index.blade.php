@extends('layouts.master')

@section('title', 'Teacher\'s Pet')

@section('content')

<h3>Recent Questions</h3>

@foreach($questions as $question)
	@include('components.question')
@endforeach

@endsection