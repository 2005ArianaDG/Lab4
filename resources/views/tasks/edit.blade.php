@extends('layouts.layout')

@section('title', 'Editar tarea')

@section('content')
    <h1>Editando tarea ID: {{ $task->id }}</h1>
    <hr>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/tasks/{{ $task->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" value="{{ $task->name }}">
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <label for="description">Descripción</label>
        <div class="mb-3">
            <textarea name="description" id="description" cols="50" rows="2">{{ $task->description }}</textarea>
            @error('description')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-outline-primary">Actualizar</button>
    </form>
@endsection
