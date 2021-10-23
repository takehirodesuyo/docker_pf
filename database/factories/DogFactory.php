<?php

namespace Database\Factories;

use App\Models\Dog;
use Illuminate\Database\Eloquent\Factories\Factory;

class DogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'dog_name' => $this->faker->name,
            'dog_status' => $this->faker->randomElement([1,2,3,4,5]),
            'remarks' => $this->faker->text(1000),
            'experience_year' => $this->faker->randomNumber(3)
        ];
    }
}
