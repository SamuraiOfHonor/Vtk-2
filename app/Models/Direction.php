<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    use HasFactory;

    protected $fillable =[
        'code', 'name', 'slug',
        'img', 'type', 'level',
        'Qualification', 'language_id',
        'accreditation', 'Department',
        'education', 'is_active',
        'is_popular','description',
    ];

    protected $casts = [
        'education' => 'array',
    
    ];

    public function forms(){
        return form::whereIn('id',$this->education ?? [])->get();
    }
    
    public function form()
    {
        return $this->belongsTo(form::class);
    }
    public function language()
    {
        return $this->belongsTo(language::class);
    }
    public function getEducationWithFormNames()
    {
        return collect($this->education)->map(function($item) {
            $form = form::find($item['form_id']); 
            
            return [
                'basic' => $item['basic-1'] ?? null,
                'form_name' => $form->name ?? 'Неизвестно', // название формы
                'time' => $item['time-1'] ?? null,
                'original_data' => $item
            ];
        });
    }
}
