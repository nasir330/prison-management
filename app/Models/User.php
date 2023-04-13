<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_type',
        'name',
        'email',
        'password',
        'photo',
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

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //user type table relation
    public function usertype() {
        return $this->hasOne(UserType::class, 'id', 'user_type');
    }
    //Staffs table relation
    public function staffs() {
        return $this->hasOne(Staffs::class, 'user_id', 'id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function($model){
            if (self::count() === 0) { // check if the user table is empty
                $model->user_type = 1; // set the user_type value to 1
            }
        });
    }
}
