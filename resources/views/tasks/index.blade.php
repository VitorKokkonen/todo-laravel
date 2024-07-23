@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tarefas</h1>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Nova Tarefa</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Título</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

<script>
    const buttonExclusao = document.querySelector('.btn-danger')

    buttonExclusao.addEventListener('click', (event) => {
        if (!confirm('Você tem certeza que deseja excluir essa tarefa?')) {}
    })
</script>