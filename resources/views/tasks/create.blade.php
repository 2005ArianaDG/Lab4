@extends('layouts.layout')

@section('title', 'Crear tarea')

@section('content')
    <h1>Creado una tarea</h1>
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
    <form action="/tasks" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="name" id="name">
                @error('name')
                    <p>{{ $message }}</p>
                @enderror
        </div>
            <label for="description" class="form-label">Descripción</label>
        <div class="mb-3">
            <textarea name="description" id="description"  cols="50" rows="2"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-primary">Crear tarea</button>
    </form>
@endsection