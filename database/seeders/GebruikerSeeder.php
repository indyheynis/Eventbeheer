<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GebruikerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gebruikers = 
        [
            [
                'name' => 'Hidde Manz',
                'email' => '191319@novacollege.nl',
                'password' => 'kaas',
                'role' => 'manager'
            ],
            [
                'name' => 'Luca Wijsman',
                'email' => '186515@novacollege.nl',
                'password' => 'brood',
                'role' => 'manager'
            ],
            [
                'name' => 'Indy Heijnis',
                'email' => '192879@novacollege.nl',
                'password' => 'boter',
                'role' => 'employee'
            ],
            [
                'name' => 'Lorenzo Schemmekes',
                'email' => '191976@novacollege.nl',
                'password' => 'eieren',
                'role' => 'host'
            ]

            
        ];
        DB::table('gebruikers')->insert($gebruikers);        
    }


}
