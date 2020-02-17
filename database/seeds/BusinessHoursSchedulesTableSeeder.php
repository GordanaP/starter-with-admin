<?php

use Illuminate\Database\Seeder;

class BusinessHoursSchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\BusinessHoursSchedule')->create([
            'day' => 'weekday',
        ]);

        factory('App\BusinessHoursSchedule')->create([
            'day' => 'Saturday',
            'day_iso' => 6,
            'open' => '10:00',
            'close' => '15:00',
        ]);
    }
}
