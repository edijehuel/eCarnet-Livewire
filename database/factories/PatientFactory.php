<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

     /**
     * Define the model's default state.
     * 
     * @return array<string, mixed>
     */
    public function definition()
    {
        $ville = $this->faker->city;
        $pays = $this->faker->country;

        return [
            "nom" => $this->faker->lastName,
            "prenom"=> $this->faker->firstName,
            "sexe" => array_rand(["H","F"], 1),
            "dateNaissance"=> $this->faker->dateTimeBetween("1980-01-01", "2000-12-30"),
            "lieuNaissance"=> "$pays, $ville",
            "nationalite"=> $this->faker->country,
            "pays"=> $pays,
            "ville"=> $ville,
            "adresse"=> $this->faker->address,
            "telephone1" => $this->faker->phoneNumber,
            "telephone2" => $this->faker->phoneNumber,
            "pieceIdentite" => array_rand(["ONI", "PASSPORT", "PERMIS DE CONDUIRE"], 1),
            "noPieceIdentite" => $this->faker->creditCardNumber,
        ];
    }
}
