<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="favicon.ico">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
    <title>Terra da Tatto</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
</head>

<body>
    <div class="main-grid">
        <div class="left-ct">
            <header>
                <img src="/img/nwt.png">
                <h1>NWT</h1>
            </header>
            <ul>
                <a href="/dashboard" id="{{ str_contains(request()->url(), '/dashboard') ? 'active' : '' }}"><img src="/img/dashboard.png">
                    <li>Dashboard</li>
                </a>
                <a href="/users" id="{{ str_contains(request()->url(), '/users') ? 'active' : '' }}"><img src="/img/user.png">
                    <li>Usuários</li>
                </a>
                <a href="/providers" id="{{ str_contains(request()->url(), '/providers') ? 'active' : '' }}"><img src="/img/shopping-cart.png">
                    <li>Fornecedores</li>
                </a>
                <a href="/clients" id="{{ str_contains(request()->url(), '/clients') ? 'active' : '' }}"><img src="/img/customer.png">
                    <li>Clientes</li>
                </a>
                <a href="/products" id="{{ str_contains(request()->url(), '/products') ? 'active' : '' }}"><img src="/img/product.png">
                    <li>Produtos</li>
                </a>
            </ul>
        </div>
        <div class="right-ct">
            <header>
                <img src="/img/tdt.png">
                <h1>Terra da Tattoo</h1>
            </header>
            @yield('content')
        </div>
    </div>
</body>
<script src="script.js"></script>
</html>