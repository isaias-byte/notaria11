<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Abogado extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['nombre', 'apellido_paterno', 'apellido_materno', 'email', 'telefono_celular', 'telefono_particular', 'codigo', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function servicios() {
        return $this->belongsToMany(Servicio::class);
    }
}
