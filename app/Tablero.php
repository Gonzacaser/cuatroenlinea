<?php

namespace App;

interface tableroInterface {
    public function limpiarTablero();
    public function mostrarTablero();
    public function alturaEnJuego(): int;
    public function anchuraEnJuego(): int;
    public function checkearCasilla(int $xPosicion, int $yPosicion);
    public function tirarFicha(int $xPosicion, Ficha $ficha);

}

class Tablero implements tableroInterface {

    protected int $ancho;
    protected int $alto;
    public array $tablero;

//  lleno el tablero de fichas blancas para limpiarlo
    public function limpiarTablero() {

        for ($x=0; $x<$this->ancho; $x++) {
            for ($y=0; $y<$this->alto; $y++) {
                $this->tablero[$x][$y] = new Ficha("blanco");
            }
        }
    }


    public function __construct(int $ancho, int $alto) {

        //if ($ancho < 4 && $alto < 4){
        //    throw expection }
        
        $this->ancho = $ancho;
        $this->alto = $alto;
        $this->limpiarTablero();

    }

    public function mostrarTablero() {

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

    // hago getters para obtener alto y ancho en clase ganar
    public function alturaEnJuego(): int {
        return $this->alto;
    }
    
    public function anchuraEnJuego(): int {
        return $this->ancho;
    }

    // verifico si hay algo en la casilla
    public function checkearCasilla(int $xPosicion, int $yPosicion){
        return (($this->tablero[$xPosicion][$yPosicion]->getColour() == 'rojo') || ($this->tablero[$xPosicion][$yPosicion]->getColour() == 'azul'));

    }
    
    public function tirarFicha(int $xPosicion, Ficha $ficha) {
        //if ($xPosicion < 0 || $xPosicion > $this->ancho)
        // exception
    
        for($x=$this->alto; $x>=0 ;$x--){

            if(!$this->checkearCasilla($xPosicion, $x)) {
                
                $this->tablero[$xPosicion][$x] = $ficha;
                break;
            }

        }
    }
}

?>