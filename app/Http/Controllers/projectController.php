<?php

namespace App\Http\Controllers;

use App\Tasks;

class projectController extends Controller
{
    public function index()
    {
        $projects = Tasks::all();
        return view('/showTasks', \compact('projects'));
    }

    public function create()
    {
        return view('/createProject');
    }

    public function store()
    {
        \request()->validate([
            'name' => 'required|min:3',
            'color' => 'required',
        ]);
        Tasks::create(request(['name', 'color']));
        return \redirect('/projects');

    }

    public function edit(Tasks $project)
    {
        return view('edit', compact('project'));
    }

    public function update(Tasks $project)
    {
        $project->update(request(['name', 'color']));
        return \redirect('/projects');

    }

    public function show(Tasks $project)
    {
        return view('show', compact('project'));
    }

    public function destroy(Tasks $project)
    {
        $project->delete();
        return \redirect('/projects');

    }

}
