<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    public function tasks()
    {
        return $this->hasMany(Tasks::class);
    }
}
