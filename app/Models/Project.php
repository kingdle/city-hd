<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'demo_project';
    protected $casts = [
        'extra' => 'json',
    ];
    protected $fillable = ['title','pictures','T_investment','C_investment','Responsible_unit','Person','Address','Abstract','Speed','S_at','E_at','release_at','created_at','updated_at'];

    public function getPicturesAttribute($pictures)
    {
        if (is_string($pictures)) {
            return json_decode($pictures, true);
        }

        return $pictures;
    }

    public function setPicturesAttribute($pictures)
    {
        if (is_array($pictures)) {
            $this->attributes['pictures'] = json_encode($pictures);
        }
    }
}
