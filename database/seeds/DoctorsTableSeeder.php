<?php

use Illuminate\Database\Seeder;
use App\Expertise;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Doctor', 10)->create()->each(function($doctor) {
            $take = random_int(1, 2);
            $expertises = Expertise::inRandomOrder()->take($take)->get();

            $doctor->expertises()->sync($expertises);
        });
    }
}
