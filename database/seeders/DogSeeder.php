<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // migrationで作成したものにつながってる 
        DB::table('dogs')->insert([
           ['dog_name' => 'PHP', 'dog_status' => 1],
           ['dog_name' => 'Laravel', 'dog_status' => 2],
           ['dog_name' => 'Javascript', 'dog_status' => 3],
        ]);
    }
}
