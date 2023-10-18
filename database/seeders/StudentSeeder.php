<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = new Student();
        $student-> name ='Gabriel';
        $student-> last_name ='Betts';
        $student-> control ='20151621';
        $student-> email ='sebasbetts@gmail.com';
        $student-> semester =7;
        $student-> program_id =1;
        $student->save();

        
    }
}
