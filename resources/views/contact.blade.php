
@extends ('layout')

@section('FormStyle')
	<link rel="stylesheet" href="css/form.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
@stop

@section('contact')
	
	<hr>
	<div class='row>'>
		<div class="col-md-8 col-md-offset-2">
			<h3>Fill in this form below</h3>
		</div>
	</div>


	<div class="row form-block">

		<div class="col-md-8 col-md-offset-2">
			@if(Session::has('success'))
				{{Session::get('success')}}
			@endif

			{{ Form::open(['files'=>true]) }}
				
					<div class="form-group">
						{{ Form::text('name','',array('required' => 'required')) }}
						{{ Form::label('name', 'Your Name') }}
						@if($errors->has('name'))
							{{ $errors->first('name') }}
						@endif
					</div>

					<div class="form-group">
						
						{{ Form::text('company','',array('required' => 'required'))  }}
						{{ Form::label('company', 'Company') }}
						@if($errors->has('company'))
							{{ $errors->first('company') }}
						@endif
					</div>

				

				<div class="form-group">
						
						{{ Form::email('email','',array('required' => 'required')) }}
						{{ Form::label('email', 'Email') }}
						@if($errors->has('email'))
							{{ $errors->first('email') }}
						@endif
				</div>

				<div class="form-group">
						
						{{ Form::textarea('message','',array('required' => 'required')) }}
						{{ Form::label('message', 'Brief Description') }}
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
	<div class = "row ">
		<div class="col-lg-12 col-md-12  col-xs-12 copyright">
			
			<p>WEBSITE DEVELOPED BY WUPING LIU</p>
		</div>
		</div>
@stop
<!-- @section('homeJS')
	
	<script src="JS/homeJS.js"></script>

@stop -->
@section('contactJS')
	
	<script src="JS/contactJS.js"></script>

@stop

