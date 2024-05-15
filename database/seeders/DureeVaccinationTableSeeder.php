<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DureeVaccinationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("duree_vaccinations")->insert([
            ["libelle"=>"Journée", "valeurEnHeure"=>24],
            ["libelle"=>"Demi-journée", "valeurEnHeure"=>12],
        ]);
    }
}
