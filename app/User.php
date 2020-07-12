<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($user){
            $user->index()->create();
            $user->about()->create();
            $user->classes()->create();
            $user->contact()->create();



        });
    }

    public function index()
    {
        return $this->hasOne(index::class);
    }

    public function home()
    {
        return $this->hasOne(home::class);
    }

    public function about()
    {
        return $this->hasOne(about::class);
    }

    public function classes()
    {
        return $this->hasOne(classes::class);
    }

    public function courses()
    {
        return $this->hasMany(course::class);
    }

    public function teachers()
    {
        return $this->hasMany(teacher::class);
    }

    public function contact()
    {
        return $this->hasOne(contact::class);
    }
}
