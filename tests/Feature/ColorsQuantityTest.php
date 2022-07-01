<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ColorsQuantityTest extends TestCase
{
    /**
     * Chequea que la cantidad de fichas de cada color sea la correcta en cada caso.
     *
     * @return void
     */
    public function test_colors_quantity_at_initial_status()
    {
        $response = $this->get('/jugar/1');

        $cuentaCantidadFichasRojas = preg_match_all('/<div class="bg-red/', $response->getContent());
        $cuentaCantidadFichasAzules = preg_match_all('/<div class="bg-sky/', $response->getContent());

        $this->assertTrue( ($cuentaCantidadFichasRojas == 1) && ($cuentaCantidadFichasAzules == 0));    
        $response->assertStatus(200);
    }


    public function test_colors_quantity_when_two_full_lines()
    {
        $response = $this->get('/jugar/11223344556677');

        $cuentaCantidadFichasRojas = preg_match_all('/<div class="bg-red/', $response->getContent());
        $cuentaCantidadFichasAzules = preg_match_all('/<div class="bg-sky/', $response->getContent());

        $this->assertTrue( ($cuentaCantidadFichasRojas == 7) && ($cuentaCantidadFichasAzules == 7));    
        $response->assertStatus(200);
    }
}
