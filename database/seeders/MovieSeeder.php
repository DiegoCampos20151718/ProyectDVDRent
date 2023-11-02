<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;


class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    
        $movie = new Movie();
        $movie-> no_copies ="5";
        $movie-> title="Transformers";
        $movie-> image="https://upload.wikimedia.org/wikipedia/en/thumb/6/66/Transformers07.jpg/220px-Transformers07.jpg";
        $movie->actors="	
        Shia LaBeouf,
        Tyrese Gibson,
        Josh Duhamel,
        Anthony Anderson,
        Megan Fox,
        Rachael Taylor,
        John Turturro,
        Jon Voight";
        $movie->synopsis="The fate of humanity hangs in the balance when two races of robots, the good Autobots and the villainous Decepticons, bring their war to Earth. The robots have the ability to transform into different mechanical objects as they search for the key to ultimate power. Only a young human, Sam Witwicky, can save the world from total destruction.";
      
        $movie->save();

        $movie = new Movie();
    }
}
