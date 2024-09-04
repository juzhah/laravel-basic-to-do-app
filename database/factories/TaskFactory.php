<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => "This is a Task!",
            'status' =>  Arr::random(['to-do', 'doing', 'completed']),
            'label' => Arr::random(['not urgent', 'important', 'urgent'])
        ];
    }
}
