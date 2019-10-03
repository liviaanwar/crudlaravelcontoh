<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $fillable = ['id','nis','nama','rayon','created_at','updated_at']
}
