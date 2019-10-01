<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table = 'courses';

    public $primarykey = 'id';

    public $timestamps = true;
}
