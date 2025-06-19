<?php

namespace App\Livewire\Bodies;

use App\Models\Body;
use Livewire\Component;

class BodiesList extends Component
{
    public function index()
    {
        return Body::where('is_active', true)
        ->where('is_popular', 1)
        ->limit(4)
        ->get();
    }
    public function render()
    {
        return view('livewire.bodies.bodies-list', [
            'Bodies' => $this->index(),
        ]);
    }
}
