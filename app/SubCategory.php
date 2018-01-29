<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //Table name
    protected $table = 'sub_category';
    //Primary key
    public $primaryKey = 'SubCategoryId';
    //Timstaps
    public $timestamps = 'false';
}

