<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CallRequest extends Model
{
    protected $table = 'callrequest';

    public $primarykey = 'id';

    public $timestamps = true;
}
