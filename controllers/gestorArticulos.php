<?php

class Articulos{

	static public function seleccionarArticulosController(){

		$respuesta = ArticulosModels::seleccionarArticulosModel("articulos");

		foreach ($respuesta as $row => $item){

			echo '
			    <div class="item">
                    <div class="card card1" style="background-image: url(backend/'.$item["ruta"].');">
                        <div class="info">
                          <h1 class="title">'.$item["titulo"].'</h1>
                          <p class="description">'.$item["introduccion"].'</p>
                          <div class="main-text-button">
                              <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                          </div>
                        </div>
                    </div>
                </div>';

		}


	}


}