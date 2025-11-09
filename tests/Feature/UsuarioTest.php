<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Usuario;

class UsuarioTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function pode_listar_usuarios()
    {
        Usuario::factory()->create(['nome' => 'João', 'email' => 'joao@example.com']);

        $response = $this->getJson('/api/usuarios');

        $response->assertStatus(200)
                 ->assertJsonFragment(['nome' => 'João']);
    }

    /** @test */
    public function pode_criar_usuario()
    {
        $response = $this->postJson('/api/usuarios', [
            'nome' => 'Maria',
            'email' => 'maria@example.com',
        ]);

        $response->assertStatus(201)
                 ->assertJsonFragment(['email' => 'maria@example.com']);
    }
}
