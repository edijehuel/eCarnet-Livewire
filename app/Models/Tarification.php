<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarification extends Model
{
    use HasFactory;

    public function vaccin(){
        return $this->belongsTo(Vaccin::class);
    }

    public function dureeVaccination(){
        return $this->belongsTo(DureeVaccination::class, "duree_vaccination_id", "id");
    }
}
