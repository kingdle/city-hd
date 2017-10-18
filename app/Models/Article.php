<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'intro',
        'content',
        'published_at'
    ];
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
        if (Carbon::now() > Carbon::parse($date)->addDays(100)) {
            return Carbon::parse($date);
        }
        return Carbon::parse($date)->diffForHumans();
    }
    public function getTagListAttribute()
    {
        return $this->tags->pluck('id')->all();
    }
    public function scopePublished($query)
    {
        $query->where('published_at','<=',Carbon::now());
    }
    public function tags() {
        return $this->belongsToMany('App\Models\Tag')->withTimestamps();
    }
}
