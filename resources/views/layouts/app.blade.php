<!DOCTYPE html>
<html>

<head>
    <title>Gerenciamento de Tarefas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/tasks') }}">Gerenciamento de Tarefas</a>
    </nav>
    <div class="container mt-5">
        @yield('content')
    </div>
</body>

</html>