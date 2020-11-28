<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function it_welcome_users_with_nickname()
    {
        $this->get('saludo/armando/hervert')
        ->assertStatus(200)
        ->assertSee('Bienvenido Armando, tu apodo es Hervert');
    }

    /** @test */
    function it_welcome_users_without_nickname()
    {
        $this->get('saludo/armando')
        ->assertStatus(200)
        ->assertSee('Bienvenido Armando');
    }
}
