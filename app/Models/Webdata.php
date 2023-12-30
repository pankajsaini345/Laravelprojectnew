<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webdata extends Model
{
    use HasFactory;


    protected $fillable = ['header','image','slide'];
    
}
