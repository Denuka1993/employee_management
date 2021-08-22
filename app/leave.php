<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class leave extends Model
{
    protected $primaryKey = 'LeaveFormID';
    protected $fillable = [
    'FirstName', 'Date', 'Reason', 'Status'
];
}
