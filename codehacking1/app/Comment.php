<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'post_id',
        'is_active',
        'user_id',
        'email',
        'body',
        'photo_id'
    ];

    public function replies(){
        return $this->hasMany('App\CommentReply');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function photo(){
        return $this->belongsTo('App\Photo');
    }

    public function post(){
        return $this->belongsTo('App\Post');
    }


}
