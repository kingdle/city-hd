<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    protected $table = 'admin_post_comments';

    protected $fillable = ['content'];

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}