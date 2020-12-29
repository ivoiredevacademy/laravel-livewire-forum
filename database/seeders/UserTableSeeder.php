<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            
            'name' => 'Glodie Juvenal',
            'email' => 'glodie@gmail.com',
            'email_verified_at' => now(),
            'password' =>  Hash::make('password'), // password
            'remember_token' => Str::random(10),

            ], 
            
            [
            
                'name' => 'Kouyate Karim',
                'email' => 'kouyatekarim02@gmail.com',
                'email_verified_at' => now(),
                'password' =>  Hash::make('kkstar34'), // password
                'remember_token' => Str::random(10),
    
                ]
            
            ]);
    }
}
