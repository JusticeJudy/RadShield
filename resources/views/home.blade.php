		

	@extends('layout')

	@section('main-page')

		<div class="row">

			<div class="col-lg-12 col-md-12 col-xs-12 image-block">
				<figure class="image1">
				<img src="img/CT Website 1.png" class="img-responsive" alt="program1" >
				<figcaption class="carousel-caption">
					<h1>Instant Results</h1>
					<p>Calculate air kerma and barrier thickness at many points on the floor plan and see the maximum values</p>
				</figcaption>
			</figure>
			</div>
		</div>
		<div class="row row2">
			<div class="col-lg-6 col-md-6  col-xs-12 image-block small-image image2">
				<a  href="./about">
				<figure class="image2">
      			<img src="img/CT and Rad Heatmap.png" class="img-responsive center-block" alt="kerma" >
				<figcaption class="carousel-caption">
					<h1>Floor and Ceiling</h1>
				</figcaption>
				</figure>
				</a>
      		</div>
      		<div class="col-lg-6 col-md-6  col-xs-12 image-block small-image image3">
      			<figure class="image3">
      			<img src="img/scanline with workload factor.png" alt="clown" class="img-responsive center-block">
				<figcaption class="carousel-caption">
					<h1>Customized workload distributions</h1>
				</figcaption>
				</figure>
      		</div>
		</div>
		</div>

	@stop
<!-- @section('homeJS')
	
	<script src="JS/homeJS.js"></script>

@stop -->

