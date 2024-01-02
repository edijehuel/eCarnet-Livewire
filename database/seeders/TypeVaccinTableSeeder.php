<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeVaccinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("type_vaccins")->insert([
            ["nom"=>"BCG"],
            ["nom"=>"DTCOQ"],
            ["nom"=>"Antipoliomyetite"],
            ["nom"=>"Antirougeoleux"],
            ["nom"=>"Antiamaril"],
            ["nom"=>"Hepatite virale B"],
            ["nom"=>"ROR"],
            ["nom"=>"Meningite cerebro-spinale"]
        ]);
    }
}
