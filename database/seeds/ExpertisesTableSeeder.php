<?php

use Illuminate\Database\Seeder;

class ExpertisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fields = [
            'General Ophthalmology',
            'Eye & Vision Care',
            'Retinal Disorders',
            'Laser Surgery'
        ];

        foreach ($fields as $field) {
            factory('App\Expertise')->create(['field' => $field ]);
        }
    }
}
