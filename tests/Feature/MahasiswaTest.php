<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MahasiswaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAccessingMahasiswaList()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('mahasiswas');

        $response->assertStatus(200);
    }
}
