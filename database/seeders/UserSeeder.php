<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create(['name' =>'Alejandro Aguilar', 
        'email' => 'alexaguilar281@gmail.com', 
        'password' => bcrypt('12345678'),
        'utype' => 'ADM']);
    }
}
