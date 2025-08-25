<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Http\Requests\UpdateTodoRequest;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
        ]);

        Todo::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('todos:index')->with('success', 'Todo created successfully!');
    }

    public function show(Todo $todo)
    {
        return view('todos.show', compact('todo'));
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }
    
    public function update(UpdateTodoRequest $request, Todo $todo)
    {
        $todo->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('todos:index')->with('success', 'Todo updated successfully!');
    }
    
}
