@extends('template')

@section('content')
<div class="right-content">
    <h3>Usuários</h3>
    <div class="table-div">
        <div class="table-container">
            <table>
                <thead>
                    <tr class="table-head">
                        <th>Nome</th>
                        <th>Senha</th>
                        <th>E-mail</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->password }}</td>
                        <td>{{ $user->email }}</td>
                        <form action="">
                            <td><button class="alter-button">Alterar</button></td>
                        </form>
                        <form onsubmit="return confirm('Você quer mesmo excluir?');" action="{{ '/api/deleteUser/' . $user->id }}" method="post">
                            <td><button class="remove-button">X</button></td>
                        </form>
                    </tr>
                    @endforeach
                    <tr class="table-form" id="table-form">
                        <form action="/api/insertUser" method="post">
                            <td><input type="text" id="name" name="name"></td>
                            <td><input type="text" id="password" name="password"></td>
                            <td><input type="email" id="email" name="email"></td>
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