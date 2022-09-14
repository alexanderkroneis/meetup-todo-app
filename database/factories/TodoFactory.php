<?php

namespace Database\Factories;

use Domain\Todos\Models\Todo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<Todo>
 */
class TodoFactory extends Factory
{
    protected $model = Todo::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->text(),
            'description' => fake()->text(),
            'completed' => fake()->boolean()
        ];
    }
}
