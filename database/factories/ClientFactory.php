<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     
     * @return array<string, mixed>
     */
    protected $model = Client::class;
    public function definition(): array
    {
        return [
            'clientName' => $this->faker->company,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'website' => $this->faker->url,
            'city' => $this->faker->city,
            'active' => $this->faker->boolean,
            //'image' => $this->faker->imageUrl(640, 480, 'business'),
            'image' => 'default.jpg',
            'address' => $this->faker->address,
        ];
    }
}
