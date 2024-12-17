<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Subscriber;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscriber>
 */
class SubscriberFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     *
     */
    protected $model = Subscriber::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
        ];
    }
}
