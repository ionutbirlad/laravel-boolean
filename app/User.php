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

    // -----------------Parte delle relazioni-----------------
      // relazione user/article
        public function articles()
        {
          return $this->hasMany('App\Article');
        }
      // relazione user/article

      // relazione user/categories
        public function categories()
        {
          return $this->hasMany('App\Category');
        }
      // relazione user/categories

      // relazione user/tags
        public function tags()
        {
          return $this->hasMany('App\Tag');
        }
      // relazione user/tags
    // -----------------Parte delle relazioni-----------------
}
