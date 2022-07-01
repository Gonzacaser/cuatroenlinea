<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CorrectDigitsUrlTest extends TestCase
{
    /**
     * Testeos de la funcionalidad con diferentes cantidades de digitos en la URL.
     *
     * @return void
     */
    public function test_one_digit_url()
    {
        $response = $this->get('/jugar/1');
        $response->assertStatus(200);
    }
    
    
    public function test_two_digits_url()
    {
        $response = $this->get('/jugar/12');
        $response->assertStatus(200);
    }


    public function test_three_digits_url()
    {
        $response = $this->get('/jugar/123');
        $response->assertStatus(200);
    }


    public function test_four_digits_url()
    {
        $response = $this->get('/jugar/1234');
        $response->assertStatus(200);
    }


    public function test_five_digits_url()
    {
        $response = $this->get('/jugar/12345');
        $response->assertStatus(200);
    }


    public function test_six_digits_url()
    {
        $response = $this->get('/jugar/123456');
        $response->assertStatus(200);
    }

    public function test_digit_eight_in_url()
    {
        $response = $this->get('/jugar/8');
        $response->assertStatus(200);
    }


    public function test_digit_zero_in_url()
    {
        $response = $this->get('/jugar/0');
        $response->assertStatus(200);
    }


    public function test_char_in_url()
    {
        $response = $this->get('/jugar/a');
        $response->assertStatus(200);
    }
}
