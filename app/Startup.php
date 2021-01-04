<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Startup extends Model
{
    use Notifiable;
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
