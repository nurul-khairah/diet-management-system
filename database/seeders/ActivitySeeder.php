<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert(array(
            array(
              'activity_name' => 'Sedentary (little or no exercise)',
            ),
            array(
                'activity_name' => 'Lightly active (light exercise/sports 1-3 days/week)',     
            ),
            array('activity_name' => 'Moderately active (moderate exercise/sports 3-5 days/week)',
            ),
            array( 'activity_name' => 'Very active (hard exercise/sports 6-7 days a week)',
            ),
            array('activity_name' => 'Extra active (very hard exercise/sports & physical job or 2x training)',
            ),
          ));
    } 
}
