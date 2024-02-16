<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // protected $fillable = ['name', 'descripcion', 'categoria'];
    protected $guarded = [];

    // se puede usar el método getRouteKeyName para cambiar el nombre de la ruta
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
