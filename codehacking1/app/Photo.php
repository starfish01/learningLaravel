<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\Environment\Console;

class Photo extends Model
{

    protected $fillable = [
        'path'
    ];

    protected $uploads = '/images/';

    public  function getFileAttribute(){
        return $this->uploads . $this->path;
    }

}
