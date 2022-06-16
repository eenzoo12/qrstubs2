<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class canteen extends Model
{
    protected $table = 'canteen_tbl';
    protected $guarded = [];

    public function transactions()
    {
        return $this->hasmany('App\Transaction');
    }
}
