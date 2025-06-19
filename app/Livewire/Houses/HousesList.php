<?php

namespace App\Livewire\Houses;

use App\Models\House;
use Livewire\Component;

class HousesList extends Component
{
    public function index()
    {
        return House::where('is_active', true)
        ->where('is_popular', 1)
        ->limit(4)
        ->get();
    }
    public function render()
    {
        return view('livewire.houses.houses-list', [
            'Houses' => $this->index(),
        ]);
    }
}
