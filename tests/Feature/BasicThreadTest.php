<?php

namespace Tests\Feature;

use App\Reply;
use App\Thread;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * @property  thread
 */
class BasicThreadTest extends TestCase
{

    /**
     * So that that we don't need to recreate
     * Thread instances over and over
     *
     */
    public function setUp()
    {
        parent::setUp();
        $this->thread=factory(Thread::class)->create();
    }
    public function test_threads_url_and_its_the_first_test_by_me()
    {
        $this->get('/threads')
            ->assertStatus(200);
    }

    public function test_a_user_can_see_a_single_thread_also_all_threads()
    {
        $reply=factory(Reply::class)->create(['thread_id'=>$this->thread->id]);

        $this->get($this->thread->path())->assertSee($reply->body);
        //$this->get('/threads/'. $thread->id);
        //$this->get( $this->thread->path())->assertSee($this->thread->body);

    }

    /*public function test_a_single_thread_can_have_replies()
    {
        $reply = factory(Reply::class)->make(['thread_id'=>$this->thread->id]);
        $this->get($this->thread->path())->assertSee(200);
    }*/

}
