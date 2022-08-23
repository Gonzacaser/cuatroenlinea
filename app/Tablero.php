<?php

namespace App;

interface tableroInterface {
    public function limpiarTablero();
    public function mostrarTablero();

}

class Tablero implements tableroInterface {

    protected int $ancho;
    protected int $alto;
    public array $tablero;

    public function limpiarTablero() {

        for ($x=0; $x<$this->ancho; $x++) {
            for ($y=0; $y<$this->altura; $y++) {
                $this->tablero[$x][$y] = new Ficha("blanco");
            }
        }
    }

    public function __construct(int $ancho, int $alto) {

        $this->ancho = $ancho;
        $this->alto = $alto;
        $this->limpiarTablero();
    }

    public function mostrarTablero(){

    }
}

?>