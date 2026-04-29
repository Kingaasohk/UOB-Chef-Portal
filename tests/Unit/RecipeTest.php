<?php

namespace Tests\Unit;

use App\Models\Recipe;
// use PHPUnit\Framework\TestCase; //default
use Tests\TestCase; //necessary


class RecipeTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    public function test_get_link()
    {
        $recipe = Recipe::factory()->make(['id' => 1, 'user_id' => 1]);
        $this->assertEquals(url('/') . '/recipes/1', $recipe->getLink());
    }

    public function test_get_image()
    {
        $recipe = new Recipe();
        $recipe->image_path = '/images/media/';
        $recipe->image_name = 'default.jpg';
        $this->assertEquals(asset('storage' . $recipe->image_path . $recipe->image_name), $recipe->getImage());
    }
}