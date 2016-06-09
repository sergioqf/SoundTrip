<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sound Trip</title>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/functions.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css"
	href="bootstrap/css/bootstrap.min.css">
	<style type="text/css">
	
		ul li a{
			color: #ffffff;
			font-weight: bold;
		}
		ul li a:hover{
			background-color: #ff0000;
		}
		
		
	
	
	</style>	
	
	
</head>
<body>


	<!-- MENU FIXO AO TOPO (SOCIAL NETWORKS AND FIND) -->

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">soundtrip</a>
			</div>
		</div>
	</nav>



	<!-- CARROSSEL -->

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators de posicionamento de imagens -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>

		<!-- Imagens e detalhes das mesmas -->
		<div class="carousel-inner" role="listbox">

			<div class="item active">
				<img src="images/johnwayne.jpg" alt="John Wayne" width="100%">
				<div class="carousel-caption">
					<h3>John Wayne</h3>
					<p>Banda brasileira de Metal/Hardcore</p>
				</div>
			</div>

			<div class="item">
				<img src="images/hardcore.jpg" alt="Hardcore" width="100%">
				<div class="carousel-caption">
					<h3>Hardcore</h3>
					<p>Hardcore de verdade.</p>
				</div>
			</div>
			<div class="item">
				<img src="images/deadfish.jpg" alt="Dead Fish" width="100%">
				<div class="carousel-caption">
					<h3>Dead Fish</h3>
					<p>Hardcore do terceiro mundo.</p>
				</div>
			</div>
			<div class="item">
				<img src="images/trivium.jpg" alt="Trivium" width="100%">
				<div class="carousel-caption">
					<h3>Trivium</h3>
					<p>Agressividade melódica.</p>
				</div>
			</div>

		</div>

		<!--     Controles laterais para mudança de imagem do Carrossel -->
		<a class="left carousel-control" href="#myCarousel" role="button"
			data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"
			aria-hidden="true"></span> <span class="sr-only">Previous</span>
		</a> <a class="right carousel-control" href="#myCarousel"
			role="button" data-slide="next"> <span
			class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<!-- MENU DE NAVECAÇÃO -->
	<nav class="navbar navbar-inverse"
		style="border-radius: 0; padding: 10px;">
		<ul class="nav nav-pills pull-right">
			<li class="active"><a href="#">Home</a></li>
			<li><a href="#">Profile</a></li>
			<li><a href="#">Messages</a></li>
		</ul>

	</nav>
	<!-- 1920 x 995 -->
	<!-- NOTÍCIAS -->
	<div class="col-md-12">
		<div class="row">
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="images/johnwayne.jpg" alt="...">
					<div class="caption">
						<h3>John Wayne</h3>
						<p>Membros: Fabio Figueiredo - vocal Rogerio Torres - guitarra/voz
							Junior Dias - guitarra Denis Dallago - baixo/voz Edu Garcia -
							bateria</p>
						<p>
							<a href="#" class="btn btn-primary" role="button">Ver</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="images/triviumtres.jpg" width="100%" alt="...">
					<div class="caption">
						<h3>Trivium</h3>
						<p>Membros: Fabio Figueiredo - vocal Rogerio Torres - guitarra/voz
							Junior Dias - guitarra Denis Dallago - baixo/voz Edu Garcia -
							bateria</p>
						<p>
							<a href="#" class="btn btn-primary" role="button">Ver</a>

						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="images/deadfishshow.jpg" alt="...">
					<div class="caption">
						<h3>Dead Fish</h3>
						<p>Rodrigo Lima - Vocal (desde 1991) Alyand - Baixo, backing
							vocals (desde 1996) Marcos Melloni - Bateria (desde 2009,
							substituiu Nô) Ric Mastria - Guitarra (desde 2013, substituiu
							Phil)</p>
						<p>
							<a href="#" class="btn btn-primary" role="button">Ver</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>






</body>
</html>