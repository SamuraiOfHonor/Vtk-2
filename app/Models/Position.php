<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $fillable =[
        'name','is_active','created_time',
    ];

    public function Position()
    {
        return $this->belongsTo(Position::class);
    }
}
