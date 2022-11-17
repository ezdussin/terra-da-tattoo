@extends('template')

@section('content')
<div class="right-content">
    <h3>Clientes</h3>
    <div class="table-div">
        <div class="table-container">
            <table>
                <thead>
                    <tr class="table-head">
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Consulta</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $client)
                    <tr>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->appointment }}</td>
                        <form action="">
                            <td><button class="alter-button">Alterar</button></td>
                        </form>
                        <form onsubmit="return confirm('Você quer mesmo excluir?');" action="{{ '/api/deleteClient/' . $client->id }}" method="post">
                            <td><button class="remove-button">X</button></td>
                        </form>
                    </tr>
                    @endforeach
                    <tr class="table-form" id="table-form">
                        <form action="/api/insertClient" method="post">
                            <td><input type="text" id="name" name="name"></td>
                            <td><input type="email" id="email" name="email"></td>
                            <td><input type="date" id="date" name="appointment"></td>
                            <td><button class="insert-button">Inserir</button></td>
                        </form>
                        <td><button class="remove-button" id="remove-button">X</button></td>
                    </tr>
                </tbody>
            </table>
            <button class="add-button" id="add-button">+</button>
        </div>
    </div>
</div>
@endsection