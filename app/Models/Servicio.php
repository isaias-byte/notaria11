<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function abogados() {
        return $this->belongsToMany(Abogado::class);
    }
}
