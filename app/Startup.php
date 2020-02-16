<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{
    public function users()
    {
        return $this->hasOne(User::class);
    }
}
