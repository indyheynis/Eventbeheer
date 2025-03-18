<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvenementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = 
        [
            [
                'name' => 'Concert By Armin Van Buuren',
                'date' => '2025-05-24',
                'time' => '19:30:00',
                'location' => 'Ziggo Dome',
                'ticket_count' => '15000',
                'description' => 'Test'
            ],
            [
                'name' => 'Concert By Teddy Swims',
                'date' => '2025-05-24',
                'time' => '15:00:00',
                'location' => 'Opera House',
                'ticket_count' => '8000',
                'description' => 'Test'
            ],
            [
                'name' => 'Concert By The Weeknd',
                'date' => '2025-05-24',
                'time' => '19:30:00',
                'location' => 'Vondelpark',
                'ticket_count' => '10500',
                'description' => 'Test'
            ]
        ];
        DB::table('evenementen')->insert($events); 
    }
}
