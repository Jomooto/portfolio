<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    public function index(){

    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
