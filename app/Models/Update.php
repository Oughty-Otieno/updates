<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    use HasFactory;


    protected $fillable = [
      'squad',
      'projects_deployed',
      'projects_sit',
      'projects_uat',
      'incidents',
      'other_updates',
      'week_number'
    ];


}
