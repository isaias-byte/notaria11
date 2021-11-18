<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Abogado extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['nombre', 'apellido_paterno', 'apellido_materno', 'email', 'telefono_celular', 'telefono_particular', 'codigo', 'imagen', 'imagen_ruta', 'mime', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function servicios() {
        return $this->belongsToMany(Servicio::class);
    }

    public function getNombreCompletoAttribute() {
        return $this->nombre . ' ' . $this->apellido_paterno . ' ' . $this->apellido_materno;
    }

    public function setNombreAttribute($nombre) {
        return $this->attributes['nombre'] = ucwords(strtolower($nombre));
    }

    public function setApellidoPaternoAttribute($apellido_paterno) {
        return $this->attributes['apellido_paterno'] = ucwords(strtolower($apellido_paterno));
    }

    public function setApellidoMaternoAttribute($apellido_materno) {
        return $this->attributes['apellido_materno'] = ucwords(strtolower($apellido_materno));
    }
}
