<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\feed;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function store(){

        $feed = new feed();
        $feed->name = request()->get('name');
        $feed->number = request()->get('number');
        $feed->email = request()->get('email');
        $feed->message = request()->get('message');
        $feed->save();

        return redirect()->route('feedback')->with('success', "Feedback posted successfully!");
    }
}
