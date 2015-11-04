<div class="form-group">
	<label for="question-title">Question Title</label>
	{!! Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Why is the sky blue?')) !!}
</div>

<div class="form-group">
	<label for="question-body">Question Body</label>
	{!! Form::textarea('body', null, array('class' => 'form-control', 'placeholder' => 'Why is the sky blue?')) !!}
</div>