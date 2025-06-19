<?php

namespace App\Livewire\Titles;

use App\Models\Title;
use Livewire\Component;

class TitlesList extends Component
{
    public function index()
    {
        return Title::where('is_active', 1)
        ->first();
    }

    public function render()
    {
        return view('partials.header',[
            'Titles' => $this->index(),
        ]);
    }
}
