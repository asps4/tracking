<?php

namespace Database\Seeders;

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
        //
        $user = new User();
        $user->name = "asepsopian";
        $user->email = "asepsopian221@gmail.com";
        $user->password = bcrypt('mmt123ah13');
        $user->save();
    }
}
