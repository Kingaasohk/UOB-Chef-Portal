<?php

namespace Tests\Feature;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RecipeTest extends TestCase
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
        $chef = User::factory()->create();

        $recipe_data = Recipe::factory(2)->create(['user_id' => $chef->id]);

        $response = $this->get('/recipes');

        $response->assertViewHas('recipe_data');
    }

    public function test_show()
    {
        $chef = User::factory()->create();

        $recipe = Recipe::factory()->create(['user_id' => $chef->id]);

        $response = $this->get('/recipes/1');

        $response->assertStatus(200);

        $response->assertSee($recipe->title);
    }
}