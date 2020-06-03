<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
      'user_id',
      'category_id',
      'title',
      'summary',
      'body',
      'visible'
    ];

    // -----------------Parte delle relazioni-----------------
      // relazione user/articles
        public function user()
        {
          return $this->belongsTo('App\User');
        }
      // relazione user/articles

      // relazione articles/category
        public function category()
        {
          return $this->belongsTo('App\Category');
        }
      // relazione articles/category

      // relazione articles/tags
        public function tags()
        {
          return $this->belongsToMany('App\Tag');
        }
      // relazione articles/tags
    // -----------------Parte delle relazioni-----------------
}
