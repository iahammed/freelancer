<?php

namespace Database\Factories;

use App\Models\Freelancer;
use Illuminate\Database\Eloquent\Factories\Factory;

class FreelancerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Freelancer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'      =>  $this->faker->name(),
            'email'     =>  $this->faker->unique()->safeEmail(),
            'address'   =>  $this->faker->address(),
            'phone'     =>  $this->faker->phoneNumber(),
            'skills'    =>  json_encode($this->faker->words()),
            'profile'   =>  $this->faker->paragraph(),
            'currency'  =>  $this->faker->randomElement(['EUR', 'USD', 'GBP']),
            'rate'      =>  $this->faker->numerify('####.##'),
        ];
    }
}
