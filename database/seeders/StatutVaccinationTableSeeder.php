<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatutVaccinationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("statut_vaccinations")->insert([
            ["nom"=>"En attente"],
            ["nom"=>"En cours"],
            ["nom"=>"Terminée"],
        ]);
    }
}
