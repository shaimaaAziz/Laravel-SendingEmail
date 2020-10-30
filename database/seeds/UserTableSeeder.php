<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'شيماء',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
      
        ]);

        $admin2 = User::create([
            'name' => 'sondos',
            'email' => 'admin2@gmail.com',
            'password' => bcrypt('admin'),
      
        ]);
        $admin3 = User::create([
            'name' => 'afnan',
            'email' => 'admin3@gmail.com',
            'password' => bcrypt('admin'),
      
        ]);
        $admin4 = User::create([
            'name' => 'tala',
            'email' => 'admin4@gmail.com',
            'password' => bcrypt('admin'),
      
        ]);
    }
}
