@extends ('layout')

@section('FormStyle')
	<link rel="stylesheet" href="css/form.css">
@stop

@section('quote')
	
	<hr>
	<div class='row>'>
		<div class="col-md-8 col-md-offset-2">
			<h3>Fill in this form below</h3>
		</div>
	</div>


	<div class="row">

		<div class="col-md-8 col-md-offset-2">
			{!! Form::open(['files'=>true]) !!}
				
					<div class="form-group">
						{!! Form::label('name', 'Your Name') !!}
						{!! Form::text('name') !!}
					</div>

					<div class="form-group">
						{!! Form::label('company', 'Company') !!}
						{!! Form::text('company') !!}
					</div>
				

				<div class="form-group">
						{!! Form::label('email', 'Email') !!}
						{!! Form::text('email') !!}
				</div>

				<div class="form-group">
						{!! Form::label('message', 'Brief Description') !!}
						{!! Form::text('message') !!}
				</div>

						{!! Form::file('floorplan') !!}
						
						{!! Form::submit('Submit', ['class'=>'btn btn-default']) !!}

				
			{!! Form::close() !!}


		</div>
	</div>




@stop