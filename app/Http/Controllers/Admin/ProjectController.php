<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index () {
        $projects = Project::all();

        return view ('admin.projects.index', compact('projects'));
    }

    public function show (Project $project) {

        return view('admin.projects.show', compact('project'));
    }
}