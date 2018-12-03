<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class act extends Model
{
    public function civil()
    {
        return $this->belongsTo(civil::class);
    }
    public function section()
    {
        return $this->hasMany(section::class);
    }
}
