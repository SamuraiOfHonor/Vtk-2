<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $fillable = [
        'number', 'email', 'linking', 'is_active', 'is_popular', 'created_time',

    ];
    protected $casts = [
        'linking' => 'array',
    
    ];

    public function getLinking()
    {
        return collect($this->linking)->map(callback: function($item) {
        
            
            return [
                'url-1' => $item['url'] ?? null,
                'svg-1' => $item['svg'] ?? null,
  
                'original_data' => $item
            ];
        });
    }
}
