@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Criar Nova Tarefa</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" class="form-control" id="title" required>
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea name="description" class="form-control" id="description"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>
@endsection
