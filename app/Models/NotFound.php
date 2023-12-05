<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotFound extends Model
{
    use HasFactory;
    protected $guard = 'not_founds';
    protected $fillable = ['title'];
}
