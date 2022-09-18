<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WineAus extends Model
{
    use HasFactory;
    protected $fillable =[
      'name',
      'type',
      'quantity',
      'price',
      'region'
    ];
}
