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
        'form_id', 'is_active',
        'is_popular','description',
    ];

    protected $casts = [
        'form_id' => 'array',
    
    ];

    public function forms(){
        return Form::whereIn('id',$this->education ?? [])->get();
    }
    
    public function form()
    {
        return $this->belongsTo(Form::class);
    }
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
    public function getEducationWithFormNames()
    {
        return collect($this->form_id)->map(function($item) {
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
