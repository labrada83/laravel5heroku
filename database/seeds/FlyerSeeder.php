<?php

use Illuminate\Database\Seeder;

class FlyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(FlyerProject\Flyer::class, 50)->create();
    }
}
