<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $data = User::all();

        return inertia('Users/IndexUser', [
            'userList' => $data
        ]);
    }
}
