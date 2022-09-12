<?php

namespace Tests\Feature;
namespace App;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class tableroTest extends TestCase {
    
    public function testRandCasillasTablero(){
        $contadorCasillas = 0;
        $tablero = new Tablero(rand(4,12), rand(4,12));
        
        for ($x=0; $x<$tablero->anchuraEnJuego(); $x++) {
            for ($y=0; $y<$tablero->alturaEnJuego(); $y++) {
                $contadorCasillas++;
            }
        }
        
        $this->assertEquals($tablero->anchuraEnJuego() * $tablero->alturaEnJuego(), $contadorCasillas);
        
        // $tablero->limpiarTablero();
    }
    
}

?>