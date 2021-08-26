<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model

{
    protected $primaryKey = 'TaskID';
    protected $fillable = [
        
        'TaskName', 'Description', 'AssignTo', 'Image', 'Status'
   ];
}
