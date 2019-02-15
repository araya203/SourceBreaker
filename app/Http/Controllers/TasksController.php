<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    public function index() {
        $tasks = Auth::user()
        ->tasks()
        ->orderBy('done')
        ->orderByDesc('created_at')
        ->paginate(5);

        return view('tasks', [
            'tasks' => $tasks
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'title' => 'required|string|max:255',
        ]);

        Auth::user()->tasks()->create([
            'title' => $data['title'],
            'done' => false,
        ]);

        session()->flash('status', 'Task Created!');
        return redirect('/');
    }
    
    public function update(Task $task)
    {
        $task->done = true;
        $task->save();

        session()->flash('status', 'Task Completed!');
        return redirect('/');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        session()->flash('status', 'Task Deleted!');
        return redirect('/');
    }
}
