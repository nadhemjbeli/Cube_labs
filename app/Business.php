<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    public $table = "businesses";

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
