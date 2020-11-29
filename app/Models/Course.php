<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    //Relación 1 a muchos
    public function activities()
    {
        return $this->hasMany('app\Models\Activity');
    }
}
