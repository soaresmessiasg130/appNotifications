<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
  use HasFactory;

  protected $table = 'notification';

  protected $fillable = [
    'title',
    'desc',
    'created_at',
    'updated_at'
  ];
}
