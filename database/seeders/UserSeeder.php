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
        User::create([
            'name' => 'super admin',
            'email' => 'admin@admin.com',
            'role'      => '1',
            'password' => bcrypt('admin123'),
        ]);
        
         User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'role'      => '2',
            'password' => bcrypt('admin123'),
        ]);
        
         User::create([
            'name' => 'manage',
            'email' => 'manager@mail.com',
            'role'      => '3',
            'password' => bcrypt('admin123'),
        ]);
        

    }
}
