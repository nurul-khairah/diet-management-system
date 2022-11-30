<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array(
              'name' => 'kiki',
            ),
            array(
                'email' => 'wipagoy770@itwbuy.com',     
            ),
            array(
                'age' => '22',
            ),
            array( 
                'height' => '1.55',
            ),
            array(
                'weight' => '40',
            ),
            array(
                'gender' => 'female',
            ),
            array(
                'password' => '',
            ),
          )); 
    }
}
        