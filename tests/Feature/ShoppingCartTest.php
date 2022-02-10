<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShoppingCartTest extends TestCase
{
    /** @test */
    public function user_show_create_cart(){
        $this->withoutExceptionHandling();
        $response = $this->post('/api/create_cart');
        $response->assertStatus(200);
    }
}
