
		$(document).ready(function(){
				$('input, textarea').blur(function(){
				    var tmpval = $(this).val();
				    if(tmpval == '') {
				    	
				        $(this).addClass('hasContent');
				        $(this).removeClass('hasContent');
				    } else {
				    	$(this).removeClass('hasContent');
				        $(this).addClass('hasContent');
				        
				    }
				});
			
			// var item='<div class="form-group fileupload">{{ Form::file("floorplan") }}@if($errors->has("floorplan")){{ $errors->first("floorplan")  }}@endif<span class="hide view">View</span><span class="hide delete">Delete</span><span class="hide add">Add Another File</span></div>';                                                                                                                                                                              
				$('input[type=file]').change(function(){
			// $(".fileupload").on("change",('input[type=file]'),  function(){
				
				var file= this.files[0];
				var reader= new FileReader();
				reader.readAsDataURL(file);
				$("span").removeClass("hide");
				if ($('.fileupload').length >=5){
					console.log(this);
					$(this).siblings('.add').hide();
				}

				
				
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

				$(".delete").click(function(){
					var $fileinput = $(this).parent();
					if ($('.fileupload').length == 1){
					$fileinput.clone(true,true).insertAfter($fileinput);
					$fileinput.remove();
				}	
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

