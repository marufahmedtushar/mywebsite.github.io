<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    protected $table ='skills';
    public $primaryKey = 'id';
    public $timestamps = true;
}
