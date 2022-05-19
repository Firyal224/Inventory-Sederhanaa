<?php

use Illuminate\Database\Seeder;
use App\User;
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
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'role'=>'admin'
        ]);
        User::create([
            'name' => 'staff',
            'email' => 'staff@gmail.com',
            'password' => bcrypt('staff123'),
            'role'=>'staff'
        ]);
    }
}
