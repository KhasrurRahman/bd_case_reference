<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function section()
    {
        return $this->belongsTo(section::class,'section_id');
    }
}
