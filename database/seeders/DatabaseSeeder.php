<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('tags')->insert([
            [
            'name' => 'PHP',
            'slug' => 'php',
            
            ],
            [
                'name' => 'React',
                'slug' => 'react',
                
            ],
            [
                'name' => 'Javascript',
                'slug' => 'js',
                    
            ],

            [
                'name' => 'C++',
                'slug' => 'c++',
                
            ],
            [
                'name' => 'HTML/CSS',
                'slug' => 'html-css',
                    
            ],
            [
            'name' => 'Java',
            'slug' => 'java',
                        
            ],

            [
                'name' => 'Laravel',
                'slug' => 'laravel',
                            
            ],

            [
                'name' => 'Python',
                'slug' => 'python',
                            
                ]

        ]);

    }
}
