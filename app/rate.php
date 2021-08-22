<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rate extends Model
{
    protected $primaryKey = 'Id';
    protected $fillable = [
        
        'Date','EmpName', 'Rating', 'Experience'
   ];
}
