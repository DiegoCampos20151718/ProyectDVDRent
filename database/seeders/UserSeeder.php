<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user-> first_name ="Diego";
        $user-> last_name="Campos";
        $user-> email="123@gmail.com";
        $user->password="12344321";
        $user->phone_number="449289201";
        $user->address="Cerrada Nispero #102";
        $user->rol="Admin";
        $user->save();

        $user = new User();
    }
}
