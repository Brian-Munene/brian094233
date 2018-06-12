<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\student;
class Fee extends Model
{
    public function students(){
        return $this->belongsToMany('App\student');
    }
}
