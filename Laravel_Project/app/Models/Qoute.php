<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qoute extends Model
{
    use HasFactory;
    protected $fillable = [
      'name',
      'email',
      'subject',
      'standard',
      'message',
    ];
}
