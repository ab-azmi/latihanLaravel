<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Item;
use App\Models\User;
use App\Providers\RouteServiceProvider;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_login()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    public function test_retunning_item_list()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('items');

        $response->assertStatus(200);
    }

    public function test_access_create_item_page()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('items/create');

        $response->assertStatus(200);
    }

    public function test_store_item_to_database()
    {
        $user = User::factory()->create();

        $data = [
            'name' => 'Kuda Merah',
            'price' => 10000,
            'quantity' => 10,
        ];

        $response = $this->from('items')
            ->actingAs($user)
            ->post('items/store', $data);

        $item = Item::where('name', $data['name'])->first();
        $this->assertEquals($data['name'], $item->name);

        $response->assertRedirect('items');
    }
}
