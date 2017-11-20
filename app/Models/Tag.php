<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'demo_tags';
    protected $fillable = [
        'name','created_at','updated_at'
    ];
    public function getOptionsAttribute($options)
    {
        if (is_string($options)) {
            $options = explode(',', $options);
        }

        return $options;
    }

    public function setOptionsAttribute($options)
    {
        if (is_array($options)) {
            $options = join(',', $options);
        }

        $this->options = $options;
    }
    public function articles() {
        return $this->belongsToMany('App\Models\Article','id');
    }
}
