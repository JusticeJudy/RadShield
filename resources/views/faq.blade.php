@extends ('layout')

@section('faq')

	<div class="row">

		<div class="col-lg-12 col-md-12 col-xs-12 faq_banner">
		<figure class="faq_image">
			<img src="img/about.jpg" class="img-responsive" alt="graph" >
			<!-- <figcaption class="carousel-caption">
				<h1>Shielding Design 3.0</h1>
			</figcaption> -->
		</figure>
		</div>
	</div>

	<div class="row faq">
		<div class="col-lg-12 col-md-12 col-xs-12 faq">
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Is RadShield open source?
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        Yes, RadShield will be open source and available for download soon.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          What do I need to run RadShield?
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        You need a Java Virtual Machine JVM.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          How does RadShield calculate?
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        RadShield samples points beyond user drawn barriers and within regions of interest. The air kerma is summed across all sources of radiation, and the barrier thickness is found using an iterative method described in Appendix C of NCRP Report 147.
      </div>
    </div>
  </div>
</div>
		</div>
	</div>

  <div class = "row ">
    <div class="col-lg-12 col-md-12  col-xs-12 copyright">
      
      <p>WEBSITE DEVELOPED BY WUPING LIU</p>
    </div>
    </div>

@stop