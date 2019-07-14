<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $guarded = [];


    public function tasks()
    {
        return $this->hasMany(Task::class);
    }


    public function addTask($task)
    {
        $this->tasks()->create($task);
    }


    public function owner()
    {
        return User::where('id', $this->owner_id)->first()->name;
    }


    public function ownerId()
    {
        return $this->owner_id;
    }
}
