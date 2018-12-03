<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class section extends Model
{
    public function act()
    {
        return $this->belongsTo(act::class,'act_id');
    }

    public function post()
    {
        return $this->hasMany(post::class);
    }
}
