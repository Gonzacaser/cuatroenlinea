<?php

namespace Tests\Feature;
namespace App;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class fichaTest extends TestCase {


    public function testFichaColour() {

        for($x=0;  $x<5;  $x++) {

            // creo un int random para testear 1=rojo 2=azul
            $numRandom = rand(1,2);
            $color = '';
            
            if($numRandom == 1){
                $color = 'rojo';
                $ficha = new Ficha($color);
                $this->assertEquals($ficha->getColour(), $color);
            }
            
            else{
                $color = 'azul';
                $ficha = new Ficha($color);
                $this->assertEquals($ficha->getColour(), $color);
            }
        
        }
    
    }

}

?>