<?php

namespace App;
use App\Fee;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public function payment(){
        return $this->HasMany('App\student');
    }
    
    
}
