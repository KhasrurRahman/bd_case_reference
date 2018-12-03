<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class civil extends Model
{
    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function act()
    {
        return $this->hasMany(act::class);
    }


}
