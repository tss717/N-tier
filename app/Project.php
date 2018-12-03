<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //


    public $table = "projects";

    public function taskes()
    {
        return $this->hasMany('app/Task');
    }

    public function user()
    {
        return $this->belongsTo('app/user');
    }
}
