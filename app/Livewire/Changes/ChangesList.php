<?php

namespace App\Livewire\Changes;

use App\Models\Change;
use Livewire\Component;

class ChangesList extends Component
{

    public function index()
    {
        return Change::where('is_active', true)
        ->where('is_popular', 1)
        ->get();
    }
    public function render()
    {
        return view('livewire.changes.changes-list',[
           'Changes' => $this->index(),
        ]);
    }
    
  
}
