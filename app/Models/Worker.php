<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{

    use HasFactory;

    protected $fillable = [
        'name', 'img', 'position_id', 'is_active', 'is_popular','created_time','exp','exp_teacher','study',
    ];
    protected $casts = [
        'study' => 'array',
    
    ];
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
    public function getWorkers()
    {
        return collect($this->study)->map(callback: function($item) {
        
            
            return [
                'place-1' => $item['place'] ?? null,
                'specialization-1' => $item['specialization'] ?? null,
                'time-start-1' => $item['time-start'] ?? null,
                'time-end-1' => $item['time-end'] ?? null,
                'original_data' => $item
            ];
        });
        
        
        
    }
}
