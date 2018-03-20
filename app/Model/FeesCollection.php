<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FeesCollection extends Model
{
    public function student(){
        $this->belongsTo(Student::class);
    }
}
