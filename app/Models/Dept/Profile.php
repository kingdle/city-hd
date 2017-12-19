<?php

namespace App\Models\Dept;

use App\Models\Dept;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'demo_user_profiles';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(Dept::class,'user_id');
    }
}
