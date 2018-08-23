<?php namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class FavoritesTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */

    public function guest_can_not_favorite_anything()
    {
        $this->withExceptionHandling()
            ->post('replies/1/favorites')
            ->assertRedirect('/login');
    }


    /** @test */
    public function an_authenticated_user_can_favorite_any_reply()
    {
        // replies/id/favorites
        $this->signIn();

        $reply = create('App\Reply');

        //If I post to a "favorite" endpoint
        $this->post('replies/' . $reply->id . "/favorites");

        $this->assertCount(1, $reply->favorites);
    }
}
