<?php

namespace App\Http\Controllers;

use App\Goal;

class GoalsController extends Controller
{
    public function index()
    {
        $goals = auth()->user()->goals;

        return view('goals.index', compact('goals'));
    }


    public function create()
    {
        return view('goals.create');
    }


    public function store()
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:20', 'max:5000']
        ]);

        $attributes['owner_id'] = auth()->id();

        Goal::create($attributes);

        return redirect('goals');
    }


    public function show(Goal $goal)
    {
        abort_if($goal->owner_id !== auth()->id(), 403);

        return view('goals.show', compact('goal'));
    }


    public function edit(Goal $goal)
    {
        abort_if($goal->owner_id !== auth()->id(), 403);

        return view('goals.edit', compact('goal'));
    }


    public function update(Goal $goal)
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:20', 'max:5000']
        ]);

        $goal->update($attributes);

        return redirect('/goals');
    }


    public function destroy(Goal $goal)
    {
        $goal->delete();

        return redirect('/goals');
    }
}
