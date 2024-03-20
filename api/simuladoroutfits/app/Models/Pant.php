<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pant extends Model
{
    use HasFactory;
    protected $fillable = ['description','brand','shop','price','image',];
}
