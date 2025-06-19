<?php

namespace App\Livewire\Galleries;

use App\Models\Gallery;
use Livewire\Component;


class Galleries2List extends Component
{

    public function index()
    {
        return Gallery::where('is_active', true)
        ->get();
    }




    public function render()
    {
        return view('livewire.galleries.galleries2-list', [
            'galleries' => $this->index(),
        ]);
    }
}
