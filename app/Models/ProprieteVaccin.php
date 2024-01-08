<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProprieteVaccin extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo(TypeVaccin::class, "type_vaccin_id", "id");
    } 
}
