<?php

namespace App\Livewire\Links;

use App\Models\Link;
use Livewire\Component;

class LinksList extends Component
{

    public function index()
    {
        return Link::where('is_active', 1)
        ->orderBy('created_time','desc')
        ->limit(1)
        ->get();
    }

    public function render()
    {
        return view('livewire.links.links-list',[
            'Links' => $this->index()
        ]);
    }
}
