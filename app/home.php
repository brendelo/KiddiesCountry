<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    public function user()
    {
        return $this->hasOne(about::class);
    }

}
