<?php

class Slide{

	static public function seleccionarSlideController(){

		$respuesta = SlideModels::seleccionarSlideModel("slide");

		foreach ($respuesta as $row => $item){

			echo ' 
			    <div class="item">
                    <div class="img-fill">
                        <img src="backend/'.substr($item["ruta"], 6).'" alt="">
                    </div>
                </div>';

		}

	}
}