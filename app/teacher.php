<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(user::class);
    }
}
