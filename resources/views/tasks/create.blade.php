<!-- resources/views/clients/create.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Cliente</title>
</head>
<body>

<h1>Criar Cliente</h1>

<form action="{{ route('clients.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <label for="phone">Telefone:</label>
        <input type="text" name="phone" id="phone" required>
    </div>
    <button type="submit">Salvar</button>
</form>

</body>
</html>
