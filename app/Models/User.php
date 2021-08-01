<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'name_ar',
        'email',
        'password',
        'date_of_birth',
        'national_id',
        'immunity_status',
        'passport_no',
        'blood_type',
        'immunity_date',
        'vaccine_id',
        'profile_pic'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function vaccine()
    {
        return $this->hasOne(Vaccine::class);
    }

    public function permits()
    {
        return $this->hasMany(Permit::class);
    }

    public function invited_to_permits()
    {
        return $this->belongsToMany(Permit::class, 'permit_user', 'user_id', 'permit_id');
    }

    // public function
}
