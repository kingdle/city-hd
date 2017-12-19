<?php

namespace App\Models\Dept;

use App\Models\Dept;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'demo_user_address';

    public function user()
    {
        return $this->belongsTo(Dept::class,'user_id');
    }
}
