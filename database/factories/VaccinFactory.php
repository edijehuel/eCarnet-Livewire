<?php

namespace Database\Factories;

use App\Models\Vaccin;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vaccin>
 */
class VaccinFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vaccin::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nom" => $this->faker->lastName,
            "noSerie" => $this->faker->swiftBicNumber,
            "type_vaccin_id" => rand(1, 8),
            "estDisponible" => rand(0, 1)
        ];
    }
}
