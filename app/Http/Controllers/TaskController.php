<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'desc')->get()->groupBy('status');
        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }
    public function show(Task $task)
    {
        return view('tasks.edit', [
            'task' => $task
        ]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store()
    {
        request()->validate(
            [
                'name' => ['required', 'min:6'],
                'status' => ['required'],
            ]
        );

        Task::create([
            'name' => request('name'),
            'content' => request('content'),
            'status' => request('status'),
            'label' => request('label')
        ]);

        return redirect('/');
    }

    public function edit(Task $task)
    {
        request()->validate(
            [
                'name' => ['required', 'min:6'],
                'status' => ['required']
            ]
        );

        $task->update([
            'name' => request('name'),
            'content' => request('content'),
            'status' => request('status'),
            'label' => request('label')
        ]);

        return redirect('/');
    }


    public function destroy(Task $task)
    {
            $task->delete();
            return redirect('/');
    }
}
