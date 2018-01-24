<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndexCat extends Model
{
    //Table name
    protected $table = 'indexCat';
    //Primary key
    public $primaryKey = 'Id';
    //Timstaps
    public $timestamps = 'false';
}
