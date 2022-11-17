@extends('template')

@section('content')
<div class="right-content">
    <h3>Produtos</h3>
    <div class="table-div">
        <div class="table-container">
            <table>
                <thead>
                    <tr class="table-head">
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>R$ {{ $product->price }}</td>
                        <td>{{ $product->amount }}</td>
                        <form action="">
                            <td><button class="alter-button">Alterar</button></td>
                        </form>
                        <form onsubmit="return confirm('Você quer mesmo excluir?');" action="{{ '/api/deleteProduct/' . $product->id }}" method="post">
                            <td><button class="remove-button">X</button></td>
                        </form>
                    </tr>
                    @endforeach
                    <tr class="table-form" id="table-form">
                        <form action="/api/insertProduct" method="post">
                            <td><input type="text" id="name" name="name"></td>
                            <td><input type="text" id="description" name="description"></td>
                            <td><input type="number" id="price" name="price" step='0.01'></td>
                            <td><input type="number" id="amount" name="amount"></td>
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