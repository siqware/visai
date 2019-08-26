<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['name', 'gender', 'dob', 'tel', 'national_id', 'address'];
}
