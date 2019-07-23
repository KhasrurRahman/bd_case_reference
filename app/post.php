<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function section()
    {
        return $this->belongsTo(section::class,'section_id');
    }

    public function category()
    {
        return $this->belongsTo(category::class,'section_id');
    }
}
