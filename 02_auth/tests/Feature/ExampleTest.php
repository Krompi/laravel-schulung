<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->seed();

        $response = $this->get('/api/posts');

        
        $response->assertJsonStructure(['id']);

        $response->assertStatus(200);
    }
}
