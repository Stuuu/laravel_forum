<?php
namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class FooTest extends TestCase
{
    use DatabaseMigrations;
    /** @test */
    public function a_channel_consist_of_threads()
    {
        $channel = create('App\Channel');
        $thread = create('App\Thread', ['channel_id' => $channel->id ]);

        $this->assertTrue($channel->threads->contains($thread));
    }
}
