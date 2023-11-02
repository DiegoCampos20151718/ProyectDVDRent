<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie_Gender;

class MovieGenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $MovieGender = new Movie_Gender();
        $MovieGender-> name_gender ="Action";
        $MovieGender->save();
    $MovieGender = new Movie_Gender();
        
    }
}
