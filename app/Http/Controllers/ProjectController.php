<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('pages.projects', compact('projects'));
    }

    //CREATE
    public function create()
    {
        return view('pages.projects_create');
    }

    //STORE
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'tech_stack' => 'required'
        ]);

        Project::create($validated);

        return redirect()->route('projects')
                        ->with('success', 'Project successfully created');
    
    }

    //EDIT 
    public function edit(Project $projects)
    {
        return view('pages.projects_edit', compact('projects'));
    }

    //UPDATE
    public function update(Request $request, Project $projects)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'tech_stack' => 'required'
        ]);

        $projects->update($validated);

        return redirect()->route('projects')
                    ->with('success', 'Project successfully updated');
    }
    
}
