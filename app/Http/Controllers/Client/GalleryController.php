<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('gallery',[
            'galleries' => Gallery::orderBy('created_at', 'Desc')->paginate(1)
        ]);
    }
}
