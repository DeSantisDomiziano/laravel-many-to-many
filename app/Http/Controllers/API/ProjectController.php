<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    function index() {
        $projects = Project::all();

        return response()->json([
            'success' => true,
            'projects' => $projects
        ]);
    }
    
}
