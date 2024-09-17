@extends('back.task.app')

@section('content')

    <h2 class="text-center my-3">Création d'une tâche</h2>

    <!-- Create/Edit Task Form -->
    <form action="{{ isset($task) ? route('tasks.update', $task->id) : route('tasks.store') }}" method="post">
        @csrf
        @if(isset($task))
            @method('PUT') <!-- Use PUT method for updating existing tasks -->
        @endif
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $task->title ?? '') }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" required>{{ old('description', $task->description ?? '') }}</textarea>
        </div>
        <div class="mb-3">
            <input type="checkbox" name="status" class="form-check-input" id="status" {{ isset($task) && $task->status ? 'checked' : '' }}>
            <label for="status" class="form-label">Terminé ?</label>
        </div>
        <button type="submit" class="btn btn-info">{{ isset($task) ? 'Mettre à jour' : 'Ajouter' }}</button>
    </form>

@endsection