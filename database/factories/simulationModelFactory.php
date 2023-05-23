<?php

namespace Database\Factories;

use App\Models\simulationModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class simulationModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = simulationModel::class;

    public function definition()
    {
        return [
            "idUser" => $this->faker->randomElement([1,2]),
            "title" => $this->faker->sentence()
        ];
    }
}
