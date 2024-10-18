<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return inertia('Index/MainIndex', [
            'message' => 'Hello from Index'
        ]);
    }

    public function show()
    {
        return inertia('Index/ShowIndex');
    }
}
