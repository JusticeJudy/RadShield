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

				<div class="form-group fileupload">
						{{ Form::file('floorplan[]', array('multiple'=>true)) }}
						@if($errors->has('floorplan'))
							{{ $errors->first('floorplan.*')  }}
						@endif
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
				<div class="form-group">
						{{ Form::submit('Submit', ['class'=>'btn btn-default']) }}
				</div>

				
			{{ Form::close() }}

		</div>
	</div>
@stop

@section('quoteJS')
	
	<script>
		$(document).ready(function(){

			
			// var item='<div class="form-group fileupload">{{ Form::file("floorplan") }}@if($errors->has("floorplan")){{ $errors->first("floorplan")  }}@endif<span class="hide view">View</span><span class="hide delete">Delete</span><span class="hide add">Add Another File</span></div>';                                                                                                                                                                              
				$('input[type=file]').change(function(){
			// $(".fileupload").on("change",('input[type=file]'),  function(){
				
				var file= this.files[0];
				var reader= new FileReader();
				reader.readAsDataURL(file);
				$("span").removeClass("hide");

				
				
				// $("iframe").attr("src", URL.createObjectURL(file));

				// 
				// 	var windowObjectReference;
				// 	windowObjectReference= window.open(
				// 			URL.createObjectURL(file), "picture", "resizable,scrollbars,status");
				// 		});

				$(".view").click(function(){
					var windowObjectReference;
					
					// var preview=;
					windowObjectReference= window.open(reader.result,"picture", "resizable,scrollbars,status");

				});

				

				$('.add').click(function(){
				// $(".fileupload").on("click",".add", function(event){
					 var $fileinput = $(this).parent();
					
					$(this).remove();
					console.log($fileinput);
					$(item).clone(true, true).insertAfter($fileinput);
					// $(fileinput).after(item).clone(true,true).after("<br>");
					
					console.log(item);
				});
				});

				var item= $(".fileupload").clone(true,true);
				// $(reader).load(function(e){
				// 	console.log("reader");
				// 	$("img").attr("src", e.target.result);
				// });

				// if(file){
				// 	console.log(reader.readAsDataURL(file));
					
				// }

			});




	</script>


@stop