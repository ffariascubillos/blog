<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function name(): Attribute
    {

        // forma old school de crear funciones 
        // desde php 8 incorpora funciones flechas similares a js
        // return new Attribute(
        //     get: function($value){
        //         return ucwords($value);
        //     },

        //     set: function($value){
        //         return strtolower($value);
        //     }
        // );

        return new Attribute(
            get: fn($value) => ucwords($value), // accesores, no modifica los datos en la base de datos, si no la representacion del registro (front)
            set: fn($value) => strtolower($value)   // mutadores
         );
    }

    // funciones en accesoras get y mutadoras set

    // public function getNameAttribute($value){
    //     return ucwords($value);
    // }

    // public function setNameAttribute($value){
    //     $this->attributes['name'] = strtolower($value);
    // }
}
