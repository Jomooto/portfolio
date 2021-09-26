<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioData extends Model
{
    protected $fillable = [
        'cv',
        'portfolioTitle',
        'picture', 
        'descriptionTitle',
        'description',
        'github',
        'linkedin',
        'contactEmail',
    ];
    
    public function portfoliable()
    {
        return $this->morphTo();
    }
}
