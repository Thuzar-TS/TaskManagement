<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskList extends Model
{
    //  protected $table = 'tasklist';
     protected $fillable = ['name','project_id','task_id'];
}
