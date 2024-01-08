<?php

namespace App\Models;

use Database\Seeders\StatutVaccinationTableSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccination extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function patient(){
        return $this->belongsTo(Patient::class);
    }

    public function statut(){
        return $this->belongsTo(StatutVaccination::class, "statut_vaccination_id");
    }

    public function paiements(){
        return $this->hasMany(Paiement::class);
    }

    public function vaccins(){
        return $this->belongsToMany(Vaccin::class, "vaccin_vaccination", "vaccination_id", "vaccin_id");
    }
}
