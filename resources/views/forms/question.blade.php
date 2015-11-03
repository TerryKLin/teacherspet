{!! Form::open() !!}
	<div class="form-group">
		<label for="question-title">Question Title</label>
    	{!! Form::text('question-title', null, array('class' => 'form-control', 'placeholder' => 'Why is the sky blue?')) !!}
    </div>

	<div class="form-group">
		<label for="question-body">Question Body</label>
    	{!! Form::textarea('question-body', null, array('class' => 'form-control', 'placeholder' => 'Why is the sky blue?')) !!}
    </div>

    <div class="form-group">
    	{!! Form::button('Ask this question', array('class' => 'btn btn-primary')) !!}
    </div>
{!! Form::close() !!}