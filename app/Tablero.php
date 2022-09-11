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

        echo "\n" . str_repeat('~', $this->ancho) . "\n";
        echo "Este es el tablero del juego";
        echo "'n" . \str_repeat('~', $this->ancho . "\n");

        for($i=0; $i<$this->alto; $i++){
            if ($i==0) {
                echo " \t" - $i . "\t";
            }
            else {
                echo $i . "\t";
            }


        }

        for($o=0; $o<$this->ancho; $o++){
            echo $o . "\t";
            for($k=0; $k<$this->alto; $k++){
                echo $this->tablero[$o][$k]->getColour() . "\t";
            }
        
        }
    
    
    }
}

?>