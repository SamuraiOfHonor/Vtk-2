<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'is_active', 'is_popular',
    ];

    public function language()
    {
        return $this->belongsTo(language::class);
    }
    public function form()
    {
        return $this->belongsTo(form::class);
    }
}
