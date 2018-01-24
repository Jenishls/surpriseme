<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jumbotron extends Model
{
     //Table name
    protected $table = 'jumbotron';
    //Primary key
    public $primaryKey = 'Id';
    //Timstaps
    public $timestamps = 'false';
}
