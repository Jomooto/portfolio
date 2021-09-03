<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['user_id','name', 'url', 'git_url', 'picture_url'];



    public function projectable(){
        return $this->morphTo();
    }

    public function technologies(){
        return $this->morphToMany(Technology::class, 'technologiable');
    }

    public function getGetNameAttribute(){

        return ucfirst($this->name);
    }

    public function setNameAttribute($value){
        $this->attributes['name'] = strtolower($value);
    }

}


