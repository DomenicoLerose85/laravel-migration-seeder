<?php

use Illuminate\Database\Seeder;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $newTravel = new Travel();
        $newTravel->place = $faker->city();
        $newTravel->country = $faker->country();
        $newTravel->description = $faker->sentences();
        $newTravel->image = '';
        $newTravel->price = $faker->randomFloat(2, 10000, 50000);
        $newTravel->save();
        //
    }
}
