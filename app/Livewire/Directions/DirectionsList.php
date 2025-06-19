<?php

namespace App\Livewire\Directions;

use App\Models\Direction;
use App\Models\form;
use Livewire\Attributes\Computed;
use Livewire\Component;

class DirectionsList extends Component
{
    public $DirectionId;

    #[Computed()]


    public function direction()
    {
        return Direction::where('is_active', 1)
            ->limit(4)
            ->get();
        
    }

    public function render()
    {
        return view('livewire.directions.directions-list', [
            'directions' => $this->direction(),
        
        ]);
        
    }
}
