<!-- resources/views/clients/index.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9fafb;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h1 {
            text-align: center;
            margin-top: 40px;
            color: #333;
            font-size: 32px;
        }

        .container {
            width: 85%;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .actions {
            display: flex;
            gap: 15px;
        }

        .actions a, .actions button {
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: bold;
            text-align: center;
            font-size: 14px;
            cursor: pointer;
        }

        .actions a {
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
        }

        .actions a:hover {
            background-color: #45a049;
        }

        .actions button {
            background-color: #f44336;
            color: white;
            border: none;
        }

        .actions button:hover {
            background-color: #d32f2f;
        }

        .create-btn {
            display: inline-block;
            margin: 30px auto 20px;
            background-color: #4CAF50;
            color: white;
            padding: 15px 30px;
            border-radius: 5px;
            font-size: 18px;
            text-decoration: none;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .create-btn:hover {
            background-color: #45a049;
        }

        .create-btn:active {
            background-color: #388e3c;
        }

       
    </style>
</head>
<body>

    <h1>Lista de Clientes</h1>

    <div class="container">
        <a href="{{ route('clients.create') }}" class="create-btn">Criar Novo Cliente</a>

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->phone }}</td>
                        <td class="actions">
                            <a href="{{ route('clients.edit', $client->id) }}">Editar</a>
                            <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
