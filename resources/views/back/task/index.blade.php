@extends('back.task.app')

@section('content')
<a href="{{route('store')}}" class="btn btn-primary my-3">Ajouter une tâche</a>
    <table class="table my-3">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tâche</td>
                <td>Description</td>
                <td>
                    <span class="badge text-bg-success">Terminée</span>
                </td>
                <td>
                    <a href="#" class="btn btn-info">Modifier</a>
                    <a href="#" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
        </tbody>

    </table>

@endsection