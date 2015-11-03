@extends('layouts.master')

@section('title', 'Teacher\'s Pet')

@section('content')

<h3>Recent Questions</h3>

@foreach($questions as $question)
<div class="panel panel-primary">
  <div class="panel-heading">
    <a href="#" class="question-title"><h3 class="panel-title">{{ $question->title }}</h3></a>
  </div>
  <div class="panel-body">
    {{ $question->body }}
  </div>
</div>
@endforeach

@endsection