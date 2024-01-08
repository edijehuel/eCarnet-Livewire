<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vaccin extends Model
{
    use HasFactory;

    public function type(){
       return $this->belongsTo(TypeVaccin::class, "type_vaccin_id", "id");
    }

    public function tarifications(){
        return $this->hasMany(Tarification::class);
    }

    public function vaccinations(){
        return $this->belongsToMany(Vaccination::class, "vaccin_vaccination", "vaccin_id", "vaccination_id");
    }

    public function propriete(){
        return $this->belongsToMany(ProprieteVaccin::class, "vaccin_propriete", "vaccin_id", "propriete_vaccin_id");
    }
}
