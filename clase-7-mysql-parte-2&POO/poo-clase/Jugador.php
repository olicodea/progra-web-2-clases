<?php

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