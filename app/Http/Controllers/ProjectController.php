<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $data['projects'] = Project::with(['company', 'skills'])->get();

        return inertia('Projects/IndexProject', $data);
    }
}
