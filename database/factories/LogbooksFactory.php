<?php

namespace Database\Factories;
use App\Models\Logbooks;
use App\Models\Trainee;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Logbooks>
 */
class LogbooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'trainee_id' => Trainee::factory(),
            'name'=> $this->faker->randomElement(['Logbook1','Logbook2','Logbook3'])
        ];
    }
}
