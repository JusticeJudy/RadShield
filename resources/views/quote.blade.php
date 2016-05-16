@extends ('layout')

@section('FormStyle')
	<link rel="stylesheet" href="css/form.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
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
			@if(Session::has('success'))
				{{Session::get('success')}}
			@endif

			{{ Form::open(['files'=>true]) }}
				
					<div class="form-group">
						{{ Form::label('name', 'Your Name') }}
						{{ Form::text('name') }}
						@if($errors->has('name'))
							{{ $errors->first('name') }}
						@endif
					</div>

					<div class="form-group">
						{{ Form::label('company', 'Company') }}
						{{ Form::text('company') }}
						@if($errors->has('company'))
							{{ $errors->first('company') }}
						@endif
					</div>

				

				<div class="form-group">
						{{ Form::label('email', 'Email') }}
						{{ Form::email('email') }}
						@if($errors->has('email'))
							{{ $errors->first('email') }}
						@endif
				</div>

				<div class="form-group">
						{{ Form::label('message', 'Brief Description') }}
						{{ Form::text('message') }}
						@if($errors->has('message'))
							{{ $errors->first('mesage') }}
						@endif
				</div>

				<hr>

				<div>
				<p> Please upload up to 5 floorplans</p>
			    </div>

				<div class="form-group fileupload">
						{{ Form::file('floorplan[]') }}
						
						<span class="hide view">
							View
						</span>
						<span class="hide delete">
							Delete
						</span>
						<span class="hide add">
							Add Another File
						</span>
						<!-- <iframe id="viewer"></iframe> -->
						
					
				</div>	

				<div>
						@if($errors->has('floorplan.0','floorplan.1','floorplan.2','floorplan.3','floorplan.4','floorplan.5'))
							<hr>
							<p> Wrong upload file format.</p>
						@endif
				</div>

				<hr>
 				{!! app('captcha')->display(); !!}

						{{ Form::submit('Submit', ['class'=>'btn btn-default']) }}
				

				

				
			{{ Form::close() }}

		</div>
	</div>
@stop

@section('quoteJS')
	
	<script src="JS/quoteJS.js"></script>

@stop