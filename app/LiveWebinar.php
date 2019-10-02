<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LiveWebinar extends Model
{
    protected $table = 'live_webinar';

    public $primarykey = 'id';

    public $timestamps = true;

}
