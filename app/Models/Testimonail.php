<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonail extends Model
{
    use HasFactory;
    protected $table = 'testimonails';
    protected $fillable = ['image','description','name','job_title'];
}

