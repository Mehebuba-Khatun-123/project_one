<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         $serviceName = fake()->unique()->words(2,true);
        return [
            'service_name' => ucwords($serviceName),
            'service_slug' => Str::slug($serviceName),
            'service_icon' => fake()->optional()->randomElement([
                'fa-solid fa code',
                'fa-solid fa-laptop',
                'fa-solid fa-mobile-screen',
                'fa-solid fa-cloud',
                'fa-solid fa-database',
                'fa-solid fa-gear',
            ]),
            'short_description' =>fake()->sentence(),
            'long_description' =>fake()->paragraphs(4,true),
            'service_image'    =>fake()->imageUrl(800,600,'business',true),
            'status'           =>fake()->boolean(90),
        ];
    }
}
