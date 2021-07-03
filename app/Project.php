<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['user_id','name','url','picture_url'];



    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getGetNameAttribute(){

        return ucfirst($this->name);
    }

    public function setNameAttribute($value){
        $this->attributes['name'] = strtolower($value);
    }

}


