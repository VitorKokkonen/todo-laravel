@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Tarefa</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $task->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea name="description" class="form-control" id="description">{{ $task->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Atualizar</button>
    </form>
</div>
@endsection