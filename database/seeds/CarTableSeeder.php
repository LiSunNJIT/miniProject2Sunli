<?php

use Illuminate\Database\Seeder;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cars::class, 50)->create()->each(function ($u) {

            //factory(App\Cars::class, 50)->create();
        });
    }
}
