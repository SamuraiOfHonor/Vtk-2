<?php

namespace App\Livewire\Galleries;

use App\Models\Gallery;
use Livewire\Component;

class GalleriesList extends Component
{
    public function index()
    {
        return Gallery::where('is_active', true)
        ->where('is_popular', 1)
        ->limit(4)
        ->get();
    }




    public function render()
    {
        return view('livewire.galleries.galleries-list', [
            'galleries' => $this->index(),
        ]);
    }

}
