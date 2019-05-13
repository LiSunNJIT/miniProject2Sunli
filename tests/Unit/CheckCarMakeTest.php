<?php

namespace Tests\Unit;

use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CheckCarMakeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
        $make = Cars::where("make"|"id",10);
        if ($make == "ford") {
            return true;
        }
        elseif ($make == "honda") {
            return true;
        }
        elseif ($make == "toyota") {
            return true;
        } else {
            return false;
        }
    }
}