<?php
include_once "pasajeros.php";

class Vip extends Pasajeros{
    private $numeroViajeroFrecuente;
    private $cantidadMillasPasajero;

	public function __construct($nombre, $numeroAsiento, $numeroTicket, $numeroViajeroFrecuente, $cantidadMillasPasajero ) {
		parent::__construct($nombre, $numeroAsiento, $numeroTicket);
		$this->numeroViajeroFrecuente = $numeroViajeroFrecuente;
		$this->cantidadMillasPasajero = $cantidadMillasPasajero;
	}

	public function getNumeroViajeroFrecuente() {
		return $this->numeroViajeroFrecuente;
	}

	public function setNumeroViajeroFrecuente($value) {
		$this->numeroViajeroFrecuente = $value;
	}

	public function getCantidadMillasPasajero() {
		return $this->cantidadMillasPasajero;
	}

	public function setCantidadMillasPasajero($value) {
		$this->cantidadMillasPasajero = $value;
	}


    public function darPorcentajeIncremento(){
        $incremento= 0.35;
        if ($this->getCantidadMillasPasajero()>300) {
            $incremento= 0.30;
        }
        

		return $incremento;
	}
}