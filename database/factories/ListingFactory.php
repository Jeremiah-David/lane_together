<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

                'title' => $this->faker->sentence(1),
                'tags' => 'Information',
                'company' => $this->faker->sentence(1),
                'location' => $this->faker->sentence(1),
                'phone' => '541-123-1234',
                'description' => $this->faker->sentence(1)
            //]
        ];
    }
}
