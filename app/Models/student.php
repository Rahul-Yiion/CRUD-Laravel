<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
  protected $table = "student";
    protected $fillable = [
        'sr_num',
        'name',
        'phone',
        'email',
        'course',
        'address',
        'gender',
        'image',
        
      ];
}

