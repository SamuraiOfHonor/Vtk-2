<?php

namespace App\Livewire\Workers;

use App\Models\Worker;
use Livewire\Attributes\Computed;
use Livewire\Component;

class WorkersList extends Component
{

    public $positionid;

    #[Computed()]
    public function workers(){
        return Worker::where('position_id', $this->positionid)
        ->where('is_active', 1)
        ->get();
    }

     public function index()
    {
        return Worker::where('is_active', 1)
        
        ->get();
    }


    public function render()
    {
        return view('livewire.workers.workers-list',[
            'Workers' => $this->index()
        ]);
    }

}
