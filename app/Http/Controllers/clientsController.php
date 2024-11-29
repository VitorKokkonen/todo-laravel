<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    // Exibir todos os clientes
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    // Formulário para criar um novo cliente
    public function create()
    {
        return view('clients.create');
    }

    // Armazenar um novo cliente
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email',
            'phone' => 'required|string|max:15',
        ]);

        Client::create($request->all());
        return redirect()->route('clients.index');
    }

    // Formulário para editar um cliente existente
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    // Atualizar os dados de um cliente
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email,' . $client->id,
            'phone' => 'required|string|max:15',
        ]);

        $client->update($request->all());
        return redirect()->route('clients.index');
    }

    // Excluir um cliente
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }
}
