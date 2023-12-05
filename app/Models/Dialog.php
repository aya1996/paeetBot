<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dialog extends Model
{
    use HasFactory;
    protected $table = 'dialogs';
    protected $fillable = ['answer','question','image','video'];

}
