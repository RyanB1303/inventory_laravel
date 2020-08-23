<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'username', 'email', 'gender','first_name','last_name','salary','position','phone','city','join_date','photo'
    ];
    //
}
