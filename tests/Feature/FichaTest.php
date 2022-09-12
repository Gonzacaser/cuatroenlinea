<?php

namespace Tests\Feature;
namespace App;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


public function colorRandom{

    protected int $num;

    rand(int $1, int $2)

}


class fichaTest extends TestCase {

    protected String $fichaColour;

    public function __construct(String $fichaColour)    {

        $this->$fichaColour = $fichaColour;

    }




}

?>