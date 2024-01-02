<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("permissions")->insert([
            ["nom"=>"ajouter un patient"],
            ["nom"=>"consulter un patient"],
            ["nom"=>"editer un patient"],

            ["nom"=>"ajouter une vaccination"],
            ["nom"=>"consulter une vaccination"],
            ["nom"=>"editer une vaccination"],

            ["nom"=>"ajouter un vaccin"],
            ["nom"=>"consulter un vaccin"],
            ["nom"=>"editer un vaccin"]
        ]);
    }
}
