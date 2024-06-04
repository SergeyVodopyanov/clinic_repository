<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $table = 'users';
    protected $guarded = false;

    public function patient(){
        if ($this->user_type == 'patient') {
            return $this->hasOne(Patient::class);
        }
    }

    public function doctor(){
        if ($this->user_type == 'doctor') {
            return $this->hasOne(Doctor::class);
        }
    }

    public function admin(){
        if ($this->user_type == 'admin') {
            return $this->hasOne(Admin::class);
        }
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'user_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
