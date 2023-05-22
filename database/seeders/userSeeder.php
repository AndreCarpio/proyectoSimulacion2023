<?php

namespace Database\Seeders;

use App\Models\usersModel;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u1 = new usersModel();

        $u1 -> id = "1";
        $u1 -> name = "Joao Andre Carpio Rocha";
        $u1 -> email = "joao.andre@gmail.com";
        $u1 -> password = bcrypt('12345678');
        
        $u1 -> save();

        $u2 = new usersModel();

        $u2 -> id = "2";
        $u2 -> name = "Jose Miguel Carpio Rocha";
        $u2 -> email = "jose.migel@gmail.com";
        $u2 -> password = bcrypt('12345678');

        $u2 -> save();


    }
}
