<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
 public $table="tasks";
    public function project()
    {
        return $this->belongsTo('app/project');
    }
}
