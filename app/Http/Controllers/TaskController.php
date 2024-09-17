<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();

    
        return view('back.dashboard', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'string|max:255|required',
            'description' => 'string|max:1000|required'
        ]);

        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->has('status') ? 1 : 0,
        ]);

        return redirect()->route('dashboard')->with('success', 'Tâche enregistrée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $task = Task::findOrFail($id);
        return view('back.task.create', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
        'title' => 'string|max:255|required',
        'description' => 'string|max:1000|required'
    ]);

        $task = Task::findOrFail($id);
        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->has('status') ? 1 : 0,
        ]);

    return redirect()->route('dashboard')->with('success', 'Tâche mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('dashboard')->with('success', 'Tâche supprimée avec succès.');
    }
}
