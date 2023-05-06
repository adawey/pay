<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{
    use  HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'f_name',
        'l_name',
        'number',
        'balance',
        'fcm_token',
        'type',  //[1=> user , 2 => marcher , 3=> admin]
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    public function payment()
    {
        return $this->hasMany(Payment::class, 'user_id', 'id');
    }
    public function notifications()
    {
        return $this->hasMany(Notification::class, 'user_id', 'id');
    }
    public function report()
    {
        return $this->hasMany(Report::class, 'user_id', 'id');
    }
}
