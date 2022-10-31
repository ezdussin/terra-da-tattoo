<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
    <title>Terra da Tattoo</title>
</head>
<body>
    <div class="main-grid">
        <div class="left-ct">
            <header>
                <img src="/img/nwt.png">
                <h1>NWT</h1>
            </header>
            <ul>
                <a href="#dashboard"><img src="/img/dashboard.png"><li>Dashboard</li></a>
                <a href="#users"><img src="/img/user.png"><li>Usuários</li></a>
                <a href="#providers"><img src="/img/shopping-cart.png"><li>Fornecedores</li></a>
                <a href="#clients"><img src="/img/customer.png"><li>Clientes</li></a>
                <a href="#products"><img src="/img/product.png"><li>Produtos</li></a>
            </ul>
        </div>
        <div class="right-ct">
            <header>
                <img src="/img/tdt.png">
                <h1>Terra da Tattoo</h1>
            </header>
            <div class="right-content" id="dashboard">
                <h3>Dashboard</h3>
            </div>
            <div class="right-content" id="users">
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
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->password }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td><button class="alter-button">Alterar</button></td>
                                    <td><button class="remove-button">X</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button class="add-button">+</button>
                    </div>
                </div>
            </div>
            <div class="right-content" id="providers">
                <h3>Fornecedores</h3>
                <div class="table-div">
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr class="table-head">
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Telefone</th>
                                    <th>CNPJ</th>
                                    <th>Endereço</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($providers as $provider)
                                <tr>
                                    <td>{{ $provider->name }}</td>
                                    <td>{{ $provider->email }}</td>
                                    <td>{{ $provider->telephone }}</td>
                                    <td>{{ $provider->cnpj }}</td>
                                    <td>{{ $provider->address }}</td>
                                    <td><button class="alter-button">Alterar</button></td>
                                    <td><button class="remove-button">X</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button class="add-button">+</button>
                    </div>
                </div>
            </div>
            <div class="right-content" id="clients">
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
                                @foreach($clients as $client)
                                <tr>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->email }}</td>
                                    <td>{{ $client->appointment }}</td>
                                    <td><button class="alter-button">Alterar</button></td>
                                    <td><button class="remove-button">X</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button class="add-button">+</button>
                    </div>
                </div>
            </div>
            <div class="right-content" id="products">
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
                                @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>R$ {{ $product->price }}</td>
                                    <td>{{ $product->amount }}</td>
                                    <td><button class="alter-button">Alterar</button></td>
                                    <td><button class="remove-button">X</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button class="add-button">+</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="script.js"></script>
</html>