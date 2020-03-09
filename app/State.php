<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //
    protected $table = 'ap_states';
    public function copi()
    {
        return $this->hasMany('App\Copi');
    }
}