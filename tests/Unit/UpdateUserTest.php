<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UpdateUserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {

        {
            $users = User::all();

            User::where('id',2)->update([

                'name' =>'Steve Smith',
                'email' =>'stevesmith888@njit.edu',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',

            ]);

        }
        $this->assertTrue(true);

    }
}
