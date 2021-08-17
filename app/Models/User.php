<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email','username',
        'password',
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


    //child relationship betweeen profile.php to user.php
    public function profile()
    {
        return $this->hasOne(Profile::class);
        

    }


    public function posts()
        {

            return $this->hasMany(Post::class);

        }





        //functionality that creates profile when we are creating new user
        protected static function boot()
        {
            parent::boot();
    
            static::created(function($user){
    
                $user->profile()->create([
                    'title'=>$user->username
                ]);
    
            });
        }
    

}
