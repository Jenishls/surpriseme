<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //Table name
    protected $table = 'supplier';
    //Primary key
    public $primaryKey = 'SupplierId';
    //Timstaps
    public $timestamps = 'false';
}
