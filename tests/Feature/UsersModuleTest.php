<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /** @test */
    function it_loads_the_users_list_page()
    {
        $this->get('/usuario')
           ->assertStatus(200)
           ->assertSee('Usuario');
    }
    
    /** @test */
    function it_loads_the_users_details_page()
    {
        $this->get('/usuario/10')
           ->assertStatus(200)
           ->assertSee("Mostrando detalle del usuario: 10");
    }

    /** @test */
    function it_loads_the_new_users_page()
    {
        $this->get('/usuario/nuevo')
           ->assertStatus(200)
           ->assertSee('Crear nuevo usuario');
    }
}
