<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        return Task::all();
    }

    public function store(Request $request)
    {
        return Task::create($request->all());
    }

    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return $task;
    }
    
    public function show(Task $task)
    {
        return $task;
    }
    
    public function destroy(Request $request, Task $task)
    {
        $task->delete();
        return $task;
    }
    
}
