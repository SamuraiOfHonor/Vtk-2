<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable =[
        'description','is_active','created_time',
    ];

    public function About()
    {
        return $this->belongsTo(About::class);
    }
}
