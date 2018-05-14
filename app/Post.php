<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    //this class assumes the table in the db is 'posts' it automatically puts it lowercase and adds an s
    //if this is not the case you can force it with
    //protected $table = 'posts'; <----- what ever the tables name is
    //if the id col is not set to 'id' then you need to point it out as well with
    //protected $primaryKey = 'post_id'; <------ something like that



}
