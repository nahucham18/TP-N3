<?php

class Pasajeros{
    private $nombre;
    private $numeroAsiento;
    private $numeroTicket;

	public function __construct($nombre, $numeroAsiento, $numeroTicket) {

		$this->nombre = $nombre;
		$this->numeroAsiento = $numeroAsiento;
		$this->numeroTicket = $numeroTicket;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function setNombre($value) {
		$this->nombre = $value;
	}

	public function getNumeroAsiento() {
		return $this->numeroAsiento;
	}

	public function setNumeroAsiento($value) {
		$this->numeroAsiento = $value;
	}

	public function getNumeroTicket() {
		return $this->numeroTicket;
	}

	public function setNumeroTicket($value) {
		$this->numeroTicket = $value;
	}

	public function darPorcentajeIncremento(){
		return 0.10;
	}

}