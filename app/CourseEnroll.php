<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseEnroll extends Model
{
    protected $table = 'course_enroll';

    public $primarykey = 'id';

    public $timestamps = true;

    //User
    public function user(){
        return $this->belongsTo('App\User');
    }
}
