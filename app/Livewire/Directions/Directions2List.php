<?php

namespace App\Livewire\Directions;

use App\Models\Direction;
use App\Models\Form;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Directions2List extends Component
{
    #[Computed()]
    public $DirectionId;


    public function directions()
    {
        return Direction::where('is_active', 1)
           
            ->get();
        
    }

    public function render()
    {
        return view('livewire.directions.directions2-list', [
            'directions' => $this->directions(),
        
        ]);
        
    }
}
