<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";
    protected $fillable = ["comment",'user_id',"article_id"];

    public function owner()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
