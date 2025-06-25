<?php

namespace App\Livewire\Forms;

use App\Models\Form;
use Livewire\Component;

class FormsList extends Component
{

    public function index()
    {
        return Form::where('is_active', 1) 
        ->get();
    }

    public function render()
    {
        return view('livewire.forms.forms-list',[
            'Forms' => $this->index()
        ]);
    }
}