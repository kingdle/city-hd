<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App_update extends Model
{
    protected $fillable = ['status','version','title','note','url'];
}
