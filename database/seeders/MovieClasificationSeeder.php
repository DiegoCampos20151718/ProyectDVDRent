<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie_Clasification;

class MovieClasificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    $MovieClasification = new Movie_Clasification();
    $MovieClasification-> name_of_clasification ="G (General Audiences)";
    $MovieClasification-> price_of_clasification="12";
  
    $MovieClasification->save();

    $MovieClasification = new Movie_Clasification();
    }
}
