<?php

namespace App\Http\Controllers;

use App\Task;
use App\Goal;

class GoalTasksController extends Controller
{
    public function update(Task $task)
    {
        $method = request()->has('completed') ? 'complete' : 'incomplete';

        $task->$method();

        return back();
    }

    public function store(Goal $goal)
    {
        $attributes = request()->validate(['description' => 'required|min:5|max:50']);

        $goal->addTask($attributes);

        return back();
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return back();
    }
}
