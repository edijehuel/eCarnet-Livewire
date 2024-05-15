<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Patient;
use App\Models\User;
use App\Models\Vaccin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TypeVaccinTableSeeder::class);
         
        Vaccin::factory(10)->create();
        Patient::factory(10)->create();
        User::factory(10)->create();

        $this->call(DureeVaccinationTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(StatutVaccinationTableSeeder::class);
    }
}