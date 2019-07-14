<?php

namespace App\Http\Controllers;

use App\Goal;

class AdminGoalsController extends Controller
{
    public function index()
    {
        $goals = Goal::all();

        return view('admin.goals.index', compact('goals'));
    }


    public function show(Goal $goal)
    {
        return view('admin.goals.show', compact('goal'));
    }


    public function delete(Goal $goal)
    {
        $goal->delete();

        return back();
    }


    public function update(Goal $goal)
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:20', 'max:5000']
        ]);

        $goal->update($attributes);

        return redirect('/admin/goals');
    }


    public function edit(Goal $goal)
    {
        return view('admin.goals.edit', compact('goal'));
    }

}
