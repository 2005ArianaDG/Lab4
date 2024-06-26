@extends('layouts.layout')

@section('title', 'Lista de tareas')

@section('content')
    <h1>Lista de tareas</h1>
    <table>
    <table class="table table-striped-columns">
        <tr>
            <th>Nombre de la Tarea</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
            <tr class ="tr">
                <td><a href="/tasks/{{ $task->id }}">{{ $task->name }}</a></td>
                <td>
                    @if (!$task->completed)
                        Pendiente
                    @else
                        Completada
                    @endif
                </td>
                <td>
                    @if (!$task->completed)
                        <form action="/tasks/{{ $task->id }}/complete" method="POST" style="display:inline;">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-outline-primary">Completar</button>
                        </form>
                    @else
                        <span>-</span>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>



@endsection
