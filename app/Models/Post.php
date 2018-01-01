<?php

namespace App\Models;

use Encore\Admin\Traits\AdminBuilder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes, AdminBuilder;

    protected $table = 'demo_posts';

    protected $casts = [
        'extra' => 'json',
    ];
    protected $fillable = ['title','content','author_id','rate','released','keywords','foo_bar','release_at','created_at','updated_at','files','images'];


    public function author()
    {
        return $this->belongsTo(Dept::class, 'author_id');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable', 'demo_taggables');
    }

    public function comments()
    {
        return $this->hasMany(PostComment::class);
    }

    public function scopeHot($query)
    {
        return $query->where('rate', '>', 1);
    }

    public function scopeReleased($query)
    {
        return $query->where('released', 1);
    }

    public function scopeUnreleased($query)
    {
        return $query->where('released', 0);
    }
    public function getImagesAttribute($images)
    {
        if (is_string($images)) {
            return json_decode($images, true);
        }

        return $images;
    }

    public function setImagesAttribute($images)
    {
        if (is_array($images)) {
            $this->attributes['images'] = json_encode($images);
        }
    }
}
