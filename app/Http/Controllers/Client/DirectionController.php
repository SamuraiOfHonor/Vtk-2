<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Direction;

class DirectionController extends Controller
{
    public function index($id)
    {
        return view('pages.directions', [
            'title' => 'Товары',
            'description' => 'Meta-описание для страницы товары',
            'keywords' => 'Товары по выгодным ценам, скидки, рассрочка',
            'id' => $id,
        ]);
    }
    public function show(Direction $direction, )
    {
        return view('pages.single-direction', [
            'direction' => $direction,
            
        ]);
    }
    
}
