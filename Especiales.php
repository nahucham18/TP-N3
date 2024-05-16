<?php
include_once "pasajeros.php";
class Especiales extends Pasajeros{
    
    private $sillaRuedas;
    private $asistencia;
    private $comidasEspeciales;

	public function __construct($sillaRuedas, $asistencia, $comidasEspeciales , $nombre, $numeroAsiento, $numeroTicket) {
        parent::__construct($nombre, $numeroAsiento, $numeroTicket);
		$this->sillaRuedas = $sillaRuedas;
		$this->asistencia = $asistencia;
		$this->comidasEspeciales = $comidasEspeciales;
	}

    

	public function getSillaRuedas() {
		return $this->sillaRuedas;
	}

	public function setSillaRuedas($value) {
		$this->sillaRuedas = $value;
	}

	public function getAsistencia() {
		return $this->asistencia;
	}

	public function setAsistencia($value) {
		$this->asistencia = $value;
	}

	public function getComidasEspeciales() {
		return $this->comidasEspeciales;
	}

	public function setComidasEspeciales($value) {
		$this->comidasEspeciales = $value;
	}

    public function darPorcentajeIncremento(){
        $incremento=0;
        $contador=0;
        $asistencia=$this->getAsistencia();
        $sillaRuedas=$this->getSillaRuedas();
        $comidasEspeciales=$this->getComidasEspeciales();

        if ($asistencia) {
            $contador++;
        };
        if ($sillaRuedas) {
            $contador++;
        };
        if ($comidasEspeciales) {
            $contador++;
        };

        if ($contador==1 || $contador==2) {
            $incremento= 0.15;
        };

        if ($contador==3) {
            $incremento= 0.30;
        };
        
        return $incremento;
		
	}
}