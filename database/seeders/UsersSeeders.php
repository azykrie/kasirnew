<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeders extends Seeder
{
    public function run(): void
    {
            DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'level' => 'admin',
        ]);

            DB::table('users')->insert([
            'name' => 'cashier',
            'email' => 'cashier@gmail.com',
            'password' => Hash::make('cashier'),
            'level' => 'cashier',
        ]);
    }
    
}