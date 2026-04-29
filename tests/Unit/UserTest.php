<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase; //necessary

class UserTest extends TestCase
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
        $user = User::factory()->make(['id' => 1]);
        $this->assertEquals(url('/chefs/1'), $user->getLink());
    }


    public function test_get_portfolio_link()
    {
        $user = User::factory()->make(['id' => 1]);
        $this->assertEquals(url('/chefs/1/portfolio'), $user->getPortfolioLink());
    }


    public function test_get_image()
    {
        $user = new User();
        $user->image_path = '/images/media/';
        $user->image_name = 'default.jpg';
        $this->assertEquals(asset('storage' . $user->image_path . $user->image_name), $user->getImage());
    }
}