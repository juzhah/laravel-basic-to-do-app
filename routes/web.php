<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $tasks = Task::orderBy('created_at', 'desc')->get()->groupBy('status');
    return view('dashboard', [
        'tasks' => $tasks
    ]);
});

Route::get('/create', function () {
    return view('tasks.create');
});

Route::post('/create', function () {
    request()->validate(
        [
            'name' => ['required', 'min:6'],
            'status' => ['required']
        ]
    );

    Task::create([
        'name' => request('name'),
        'content' => request('content'),
        'status' => request('status')
    ]);

    return redirect('/');
});

Route::get('/edit/{task}', function (Task $task) {
    return view('tasks.edit', [
        'task' => $task
    ]);
});

Route::patch('/edit/{task}', function (Task $task) {
    request()->validate(
        [
            'name' => ['required', 'min:6'],
            'status' => ['required']
        ]
    );

    $task->update([
        'name' => request('name'),
        'content' => request('content'),
        'status' => request('status')
    ]);

    return redirect('/');
});

Route::delete('/delete/{task}', function (Task $task) {
    $task->delete();
    return redirect('/');
});
