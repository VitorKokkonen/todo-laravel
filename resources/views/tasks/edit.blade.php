<!-- resources/views/clients/edit.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
</head>
<body>

<h1>Editar Cliente</h1>

<form action="{{ route('clients.update', $client->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" value="{{ $client->name }}" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $client->email }}" required>
    </div>
    <div>
        <label for="phone">Telefone:</label>
        <input type="text" name="phone" id="phone" value="{{ $client->phone }}" required>
    </div>
    <button type="submit">Atualizar</button>
</form>

</body>
</html>
