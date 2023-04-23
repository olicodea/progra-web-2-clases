<?php
//GET j1 = piedra
//GET j2 = tijera
//Ganó j1!

$jugador1 = $_GET["j1"];
$jugador2 = $_GET["j2"];

// Hariamos muchos if elseif en procedural
if($jugador1 === $jugador2) {
    echo "empate";
} elseif ($jugador1 == "piedra" && $jugador2 == "papel") {
    $piedra = new Piedra("jugador1");
    $papel = new Papel("jugador1");
    echo $piedra->jugar($papel);
}

// Lo hacemos con POO

$jugador1 = new Jugador("piedra");

class Jugador {
    private $jugada;

    public function __construct($jugada) {
        $this->jugada = $jugada;
    }

    public function getJugada() {
        return $this->jugada;
    }

    public function juegaContra($jugador2) {
        $jugador1 = $this->jugada;
    }
}

class Papel
{
    private $jugador;
    public function __construct($jugador)
    {
        $this->jugador = $jugador;
    }

    public function jugar($jugada) {
        return $this->jugador;
    }

    public function jugasContraPiedra($oponente) {
        return "perdiste";
    }
}

class Piedra
{
    private $jugador;
    public function __construct($jugador)
    {
        $this->jugador = $jugador;
    }

    public function jugar($jugada) {
        return $jugada->jugasContraPiedra($this);
    }

    public function jugasContraPiedra($oponente) {
        return "empate";
    }

    private function ganaste() {
        return $this->jugador;
    }
}

class Tijera {
    private $jugador;

    public function __construct($jugador) {
        $this->jugador = $jugador;
    }

    public function jugasContraPiedra($oponente) {
        return "ganaste";
    }
}