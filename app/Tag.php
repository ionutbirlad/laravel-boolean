<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
      'user_id',
      'name'
    ];

    // -----------------Parte delle relazioni-----------------
      // relazione user/tags
        public function user()
        {
          return $this->belongsTo('App\User');
        }
      // relazione user/tags

      // relazione articles/tags
        public function articles()
        {
          return $this->belongsToMany('App\Article');
        }
      // relazione articles/tags
    // -----------------Parte delle relazioni-----------------
}
