<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Mail;
use Naux\Mail\SendCloudTemplate;

class User extends Authenticatable
{
    use HasApiTokens,Notifiable;
    protected $table = 'admin_users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','name', 'email', 'password','avatar','confirmation_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','api_token'
    ];
    public function sendPasswordResetNotification($token)
    {
        $data = [
            'url' => url('password/reset', $token)
        ];
        $template = new SendCloudTemplate('maxdata_password_reset', $data);

        Mail::raw($template, function ($message){
            $message->from('nkings@163.com', 'ianduo');
            $message->to($this->email);
        });
    }
    public function isMember()
    {
        return false;
    }
}
