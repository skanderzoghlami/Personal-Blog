<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //this article belongs to a user and has some comments
    public $table="articles";
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
