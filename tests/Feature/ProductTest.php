<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_get_single_products()
    {
        $response = $this->get('api/product/2');
        $response->assertStatus(200);
    }

    public function test_get_all_products()
    {
        $response = $this->get('api/products');
        $response->assertStatus(200);
    }
}
