<?php

use App\User;
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
         // INSERT INTO users VALUES()
        $user = new User();
        $user->name = "Panuwat Saeheng";
        $user->email = "yoshino2540@gmail.com";
        $user->password = bcrypt("1234");
        $user->save();
    }

}
