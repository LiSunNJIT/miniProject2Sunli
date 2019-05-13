<?php

namespace Tests\Unit;

use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateCarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        {
            $cars = Cars::all();

            Cars::where('id',51)->update([

                'year' => 2000,

            ]);

        }
        $this->assertTrue(true);
    }
}
