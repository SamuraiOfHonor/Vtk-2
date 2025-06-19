<?php

namespace App\Livewire\Abouts;

use App\Models\About;
use Livewire\Component;

class AboutsList extends Component
{
    public function index()
    {
        return About::where('is_active', 1)
        ->orderBy('created_time','desc')
        ->limit(1)
        ->get();
    }

    public function render()
    {
        return view('livewire.abouts.abouts-list',[
            'Abouts' => $this->index(),
        ]);
    }
}
