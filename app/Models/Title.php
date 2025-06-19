<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;

    protected $fillable =[
        'name','img','is_popular','is_active','created_time',
    ];

    public function Title()
    {
        return $this->belongsTo(Title::class);
    }
}
