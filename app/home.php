<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
