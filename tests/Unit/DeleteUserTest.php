<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class DeleteUserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        User::where('id',1) -> delete();




        //$user = User::find(1);

        //$user-> delete();

        //$users = User::all();

        $this->assertTrue(true);
    }
}
