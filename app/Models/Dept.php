<?php

namespace App\Models;

use App\Models\Dept\Address;
use App\Models\Dept\Profile;
use App\Models\Dept\Sns;
use Encore\Admin\Traits\AdminBuilder;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Dept extends Model
{
    use HasApiTokens,AdminBuilder;

    //use Faker;

    protected $table = 'demo_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profile()
    {
        return $this->hasOne(Profile::class, 'user_id');
    }

    public function sns()
    {
        return $this->hasOne(Sns::class, 'user_id');
    }

    public function address()
    {
        return $this->hasOne(Address::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function friends()
    {
        return $this->belongsToMany(Dept::class, 'demo_friends', 'user_id', 'friend_id')->withPivot('remark');
    }

    /**
     * @param $query
     * @param $gender
     * @return mixed
     */
    public function scopeGender($query, $gender)
    {
        if (!in_array($gender, ['m', 'f'])) {
            return $query;
        }

        return $query->whereHas('profile', function ($query) use ($gender) {
            $query->where('gender',  $gender);
        });
    }

    public function searchableAs()
    {
        return 'depts';
    }
}

