<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    protected $guarded = [];
    public function user(){
        return $this->belongsTo(user::class);
    }
}
