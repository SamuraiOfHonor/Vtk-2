<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Title;

class TitleController extends Controller
{
    public function index()
    {
        return Title::where('is_active', 1)
        ->first();
    }

    public function render()
    {
        return view('partials.header',[
            'Titles' => $this->index(),
        ]);
    }
}
