<?php

class Viaje {
    private $costoViaje;
    private $sumaCostosAbonados=0;
    private $cantMaxima;
    private $pasajeros=[];


	public function __construct($costoViaje, $cantMaxima) {

		$this->costoViaje = $costoViaje;
		
		$this->cantMaxima = $cantMaxima;
		
	}

	public function getCostoViaje() {
		return $this->costoViaje;
	}

	public function setCostoViaje($value) {
		$this->costoViaje = $value;
	}

	public function getSumaCostosAbonados() {
		return $this->sumaCostosAbonados;
	}

	public function setSumaCostosAbonados($value) {
		$this->sumaCostosAbonados = $value;
	}

	public function getCantMaxima() {
		return $this->cantMaxima;
	}

	public function setCantMaxima($value) {
		$this->cantMaxima = $value;
	}

	public function getPasajeros() {
		return $this->pasajeros;
	}

	public function setPasajeros($value) {
		$this->pasajeros = $value;
	}



    public function  venderPasaje($objPasajero){

		echo $objPasajero;

		$pasajeros = $this->getPasajeros();
		$respuesta="no hay pasajes";

        if (count($pasajeros)<$this->getCantMaxima()) {
			array_push($pasajeros, $objPasajero);
			$this->setPasajeros($pasajeros);
			$valorPasaje=(($objPasajero->darPorcentajeIncremento()*$this->getCostoViaje()) + $this->getCostoViaje()  );
			$this->setSumaCostosAbonados($valorPasaje+$this->getSumaCostosAbonados());
			$respuesta=$valorPasaje;
		}

		return $respuesta;
		
    }

	public function hayPasajesDisponible(){
		$rta=false;
		$pasajeros = $this->getPasajeros();

		if (count($pasajeros)<$this->getCantMaxima()) {
			$rta=true;
		}

		return $rta;
	}


}