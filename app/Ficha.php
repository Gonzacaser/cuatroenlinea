<?php

namespace App;

interface fichaInterface {
    public  function getColour();
}

class Ficha implements fichaInterface {

    protected String $fichaColour;

        public function __construct(String $fichaColour) {

         $this->fichaColour = $fichaColour;
        }


        public function getColour() {
        
            return $this->fichaColour;
        }

}

?>