<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioData extends Model
{
    public function portfoliable(){
        return $this->morphTo();
    }
}
