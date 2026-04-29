<?php

namespace Tests\Feature;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ChefTest extends TestCase
{

    use RefreshDatabase;


    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_index()
    {

        $chef_data = User::factory(2)->create();

        $response = $this->get('/chefs');

        $response->assertStatus(200);

        $response->assertViewHas('chef_data');
    }

    public function test_show()
    {
        $chef = User::factory()->create();

        $response = $this->get('/chefs/1');

        $response->assertStatus(200);

        $response->assertSee($chef->name);
    }


    public function test_show_portfolio()
    {
        $chef = User::factory()->create();
        $featured_data = Recipe::factory(2)->create(['user_id' => $chef->id, 'featured' => 1]);

        $response = $this->get('/chefs/1/portfolio');

        $response->assertStatus(200);

        $response->assertViewHas('chef');
        $response->assertViewHas('featured_data');
    }
}