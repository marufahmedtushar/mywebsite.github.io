<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyProjects extends Model
{
    protected $table ='myprojects';
    public $primaryKey = 'id';
    public $timestamps = true;
}
