<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TypeVaccin>
 */
class TypeVaccinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nom" => array_rand(["BCG", "DTCOQ", "Antipoliomyetique", "Antirougeoleux", "Antiamaril", "Hepatite virale B", "ROR", "Meningite cerebro-spinale"], 1)
        ];
    }  
}
