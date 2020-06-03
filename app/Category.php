<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
      'user_id',
      'name'
    ];

    // -----------------Parte delle relazioni-----------------
      // relazione user/categories
        public function user()
        {
          return $this->belongsTo('App\User');
        }
      // relazione user/categories

      // relazione articles/category
        public function articles()
        {
          return $this->hasMany('App\Article');
        }
      // relazione articles/category
    // -----------------Parte delle relazioni-----------------
}
