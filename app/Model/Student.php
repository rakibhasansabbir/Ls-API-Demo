<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function fees(){
        return $this->hasOne(FeesCollection::class);
    }
}
