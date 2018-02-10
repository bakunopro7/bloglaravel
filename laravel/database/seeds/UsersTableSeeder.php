<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //se crean 20 usuarios
        factory(App\User::class,29)->create();

        App\User::create([
        	'name'  => 'Jesus Aguilar',
        	'email' =>  'jabakabaka@gmail.com',
        	'password' =>  bcrypt('jesus007') //se encripta la contraseña
        	
        ]);
    }
}
