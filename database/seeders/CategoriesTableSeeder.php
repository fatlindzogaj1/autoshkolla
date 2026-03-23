<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Situatat në Rrugë',
                'created_at' => '2026-03-15 22:27:29',
                'updated_at' => '2026-03-15 22:27:29',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Shenjat e Trafikut',
                'created_at' => '2026-03-15 22:27:48',
                'updated_at' => '2026-03-15 22:27:48',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Kontrolli i Trafikut nga Policia',
                'created_at' => '2026-03-15 22:28:11',
                'updated_at' => '2026-03-15 22:28:11',
            ),
            3 => 
            array (
                'id' => 4,
            'name' => 'Sinjalizimi Horizontal (Vizat në Rrugë)',
                'created_at' => '2026-03-15 22:28:27',
                'updated_at' => '2026-03-15 22:28:27',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Rregullat e Trafikut dhe Sigurisë',
                'created_at' => '2026-03-15 22:28:45',
                'updated_at' => '2026-03-15 22:28:45',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Kryqëzimet',
                'created_at' => '2026-03-18 13:32:39',
                'updated_at' => '2026-03-18 13:32:39',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Faktorët Psiko - Fizik, Eko-Ngasja, Mekanika ',
                'created_at' => '2026-03-19 19:36:48',
                'updated_at' => '2026-03-19 19:36:48',
            ),
        ));
        
        
    }
}