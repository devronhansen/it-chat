<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Auth;

class ChatControllerTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function a_new_chatter_is_listed_in_chat()
    {

    }

    /** @test */
    public function a_chatter_can_send_messages()
    {

    }

    /** @test */
    public function a_chatter_receives_messages()
    {

    }

    /** @test */
    public function a_user_can_login_and_then_chat()
    {
        $user = factory('App\User')->create();

        $this->actingAs($user);

        $this->visit('/chat')->see('"Ein Chat sie zu knechten..."');

    }
}