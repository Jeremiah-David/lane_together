<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Listing;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        Listing::create(
            [
                'title' => 'Propane Available', 
                'tags' => 'Gas, Energy, Heat',
                'company' => 'U-Haul',
                'location' => 'Franklin Boulevard, Sringfield',
                'phone' => '541-123-1234',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
            ],

        );

        Listing::create(
            [
                'title' => 'Water Available', 
                'tags' => 'Water',
                'company' => 'Winco',
                'location' => 'Mohawk Ave, Sringfield',
                'phone' => '541-123-1234',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
            ],
            );
            Listing::factory(10)->create();
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
