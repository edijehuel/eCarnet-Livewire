<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeVaccin extends Model
{
    use HasFactory;

    protected $table = "type_vaccins";

    public function vaccins(){
       return $this->hasMany(Vaccin::class);
    }
}
