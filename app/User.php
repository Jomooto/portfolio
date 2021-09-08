<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function projects(){
        return $this->morphMany(Project::class, 'projectable');
    }

    // public function technologiesthrow(){
    //     return $this->hasManyThrough(Technology::class, Project::class);
    // }

    public function technologies(){
        return $this->morphToMany(Technology::class, 'technologiable');
    }

}




// TODO:: congigurar las notificaciones
// TODO:: configurar los botones de la tabla y agregar el boton asociar
// TODO:: estylize all site
