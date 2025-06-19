<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Worker;

class WorkerController extends Controller
{
    public function index($id)
    {
        return view('page-employee',[
            'Workers' => Worker::orderBy('created_at', 'Desc')->paginate(1),
            'id' => $id,
        ]);
    }
    public function show(Worker $worker, )
    {
        return view('pages.single-worker', [
            'worker' => $worker,
            
        ]);
    }
    
}
