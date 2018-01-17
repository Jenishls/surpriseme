<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
      //Table name
      protected $table = 'category';
      //Primary key
      public $primaryKey = 'CategoryId';
      //Timstaps
      public $timestamps = 'false';
}
