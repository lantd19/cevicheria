<!--=====================================
COLUMNA BOTONERA           
======================================-->

	<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12" id="col1">
		
		<div id="logo" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
			<img src="views/dist/img/klassy-logo.png" class="img-responsive" alt="Image">


		</div>

		<!--=====================================
		BOTONERA MOVIL            
		======================================-->

		<div id="botoneraMovil" class="navbar-header navbar-inverse">

			<button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target="#botonera">

				<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
       			<span class="icon-bar"></span>

			</button>
		
		</div>

		<!--====  Fin de BOTONERA MOVIL  ====-->

		<nav id="botonera" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 collapse navbar-collapse text-center">
					
			<ul class="nav navbar">

			<li><a href="inicio">Inicio <span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="slide">Slide <span class="glyphicon glyphicon-picture"></span></a></li>
			<li><a href="articulos">Artículos <span class="glyphicon glyphicon-book"></span></a></li>
			<li><a href="galeria">Menú <span class="glyphicon glyphicon-cutlery"></span></a></li>
			<li><a href="videos">Videos <span class="glyphicon glyphicon-film"></span></a></li>
				
				<?php 

	  			if($_SESSION["rol"] == 0){
				
				echo '<li><a href="suscriptores">Suscriptores <span class="glyphicon glyphicon-new-window"></span></a></li>';

				}
				?>

			</ul>

		</nav>
		<CENTER>
		<a href="../index.php" target="_blank"><button type="button" class="btn btn-primary">Ver sitio</button></a>
		</CENTER>

	</div>

<!--====  FIn de COLUMNA BOTONERA  ====-->