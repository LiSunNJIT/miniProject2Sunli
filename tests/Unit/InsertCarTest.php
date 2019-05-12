<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
Use App\Cars;

class InsertCarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        {
            $users = Cars::all();

            Cars::where('cars')->insert([

                'make' => 'ford',
                'model' => 'Explorer',
                'year' => '2017',

            ]);

        }
        $this->assertTrue(true);

    }
}
