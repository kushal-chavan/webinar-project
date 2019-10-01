<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Webinar extends Model
{
    protected $table = 'webinar';

    public $primarykey = 'id';

    public $timestamps = true;
}
