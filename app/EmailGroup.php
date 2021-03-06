<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailGroup extends Model
{
    public function emails()
    {
        return $this->hasMany('App\Email');
    }
}
