<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use  App\Models\Employee;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model =  Employee::class;

    public function definition(): array
    {
        return [
            'name'=> $this->faker->sentence(),
            'last_name' => $this->faker->sentence(),
            'dni'=> $this->faker->numberBetween(10000000, 99999999),
            'birth_date' => $this->faker->dateTimeBetween('-60 years', '-18 years')->format('Y-m-d'),
            'email'=> $this->faker->unique()->safeEmail,
            'position_job'=> $this->faker->jobTitle,
            'phone' => $this->faker->phoneNumber,
            'department_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
