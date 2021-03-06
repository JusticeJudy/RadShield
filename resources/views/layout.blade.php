<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RadShield</title>
		<link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="css/app.css">
		<link rel="stylesheet" href="css/about.css">
		<link rel="stylesheet" href="css/form.css">
		<link href="http://fonts.googleapis.com/css?family=Raleway:400,800,300" rel="stylesheet" type="text/css">
	
	@yield('FormStyle')

	<!-- <link rel="stylesheet" href="{{ asset(elixir('css/app.css')) }}"> -->
	<!-- <link rel="stylesheet" href="{{ elixir('css/app.css') }}">  -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
</head>

<body>


	<div class="container-fluid">
		<div class="row">
			<nav  class="navbar  navbar-static-top">
				<!-- <div class="container-fluid"> -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
	  						<!-- <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> -->
	  						<span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
						</button>
						<a class="navbar-brand large" href="./"> <img src="img/RadShield bg removed.png" class="img-responsive" alt="logo"></a>
						<a class="navbar-brand mobile" href="./"> <img src="img/shield bg removed.png" class="img-responsive " alt="logo"></a>
						
					</div>


					<div class="navbar-collapse collapse" >
							<ul class="nav navbar-nav navbar-right ">
								<li><a  href="./">Home</a></li>
								<li><a href="./about">About</a></li>
								<li><a href="./download">Download</a></li>
								<li><a href="./faq">FAQ</a></li>
								<li><a href="./contact">Contact</a></li>
							</ul>
					</div>
				<!-- </div> -->
			</nav>
		</div>

		@yield('main-page')
		
		@yield('about')

		@yield('download')

		@yield('faq')

		@yield('contact')

	<!-- @yield('content')

	@yield('footer') -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="JS/homeJS.js"></script>
   		<!-- @yield('homeJS') -->
   		@yield('contactJS')

   	
	
	

	
		
	
	

	
</body>
</html>
