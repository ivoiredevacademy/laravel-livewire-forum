<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            
        [
            'name' => 'PHP',
            'slug' => 'php'
            
        ],
        
        
        ['name' => 'React',
        'slug' => 'react'],


        ['name' => 'Javascript',
        'slug' => 'js'],

        ['name' => 'C++',
        'slug' => 'c++'],
    
    
        ['name' => 'HTML/CSS',
        'slug' => 'html-css'],

        ['name' => 'Java',
        'slug' => 'java'],

        ['name' => 'Laravel',
        'slug' => 'laravel'],

        ['name' => 'Python',
        'slug' => 'python']
    
    
    
    
    
    
        ]);
    }
}
