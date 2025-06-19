<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feed extends Model
{
    use HasFactory;

    protected $fillable =[
        'name' , 'number' , 'email' , 'message', 'is_popular', 'is_active',
    ];
}
