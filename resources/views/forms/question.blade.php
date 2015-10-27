{!! Form::open() !!}
	<div class="form-group">
    	{!! Form::textarea('question', null, array('class' => 'form-control', 'placeholder' => 'Why is the sky blue?')) !!}
    </div>

    <div class="form-group">
    	{!! Form::button('Ask this question', array('class' => 'btn btn-primary')) !!}
    </div>
{!! Form::close() !!}