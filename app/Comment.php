<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //this comment belongs to an article
    public $table="comments";
    public function comment()
    {
        return $this->belongsTo('App\Article');
    }
}
