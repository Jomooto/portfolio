<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    public function index(){

    }
    public function users(){
        return $this->morphedByMany(User::class, 'technologiable');
    }

    public function projects(){
        return $this->morphedByMany(Project::class, 'technologiable');
    }

}
