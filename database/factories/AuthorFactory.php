<?php

namespace Database\Factories;

use App\Enum\Author\AuthorStatus;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Author;

class AuthorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Author::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'biography' => $this->faker->text(),
            'status' => $this->faker->randomElement(AuthorStatus::cases()),
        ];
    }
}
