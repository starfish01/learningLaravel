<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    public $directory = "/images/";

   // use SoftDeletes;

    //
    //this class assumes the table in the db is 'posts' it automatically puts it lowercase and adds an s
    //if this is not the case you can force it with
    //protected $table = 'posts'; <----- what ever the tables name is
    //if the id col is not set to 'id' then you need to point it out as well with
    //protected $primaryKey = 'post_id'; <------ something like that

    protected $date = ['$deleted_at'];

    protected $fillable = [
        'title',
        'content',
        'path'
    ];


    public function user(){
        return $this->belongsTo('App\User');
    }

    //this looks wrong??
//    public function photos(){
//        return $this->morphMany('App\Photo','imageable');
//    }

    public function tags(){

        return $this->morphToMany('App\Tag','taggable');

    }

    public function getPathAttribute($value){
        return $this->directory . $value;
    }

    public static function scopeLatest($query){

        return $query->orderBy('id','desc')->get();

    }



}


