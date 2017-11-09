<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateRepliesTest extends TestCase
{
    /* @test */
    public function test_only_authenticate_user_can_reply()
    {
        $a=factory(User::class)->make();
        dd( $a->id);

    }


    public function test_user_reply_vadidates_properly()
    {

    }

    public function test_all_reply_of_a_thread_order_by_desc()
    {
        return true;
    }
}
