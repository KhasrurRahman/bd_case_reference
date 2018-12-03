<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function civil()
    {
        return $this->hasMany(civil::class);
    }
    public function act()
    {
        return $this->hasMany(act::class,'civil_id');
    }

    public function section()
    {
        return $this->hasMany(section::class,'act_id');
    }
}
