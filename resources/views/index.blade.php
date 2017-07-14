<! DOCTYPE html>

<html lang="pt-br">
<head>
    <title>Simulação Habitacional</title>
    <meta charset="utf-8">

    <!--Link para a fonte e para o arquivo de estilos -->
    {{--<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">--}}
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <script src="/js/app.js"></script>
</head>

<body>
<header class="cabeçario_1">

    <div class="jumbotron">
        <div class="col-lg-offset-3 col-lg-12">
            <h1 class="logo">Imobiliária Lothus</h1>
            <h2 class="titulo_1">Simulação Habitacional MCMV</h2>
        </div>
    </div>
<!--
    {{--Exemplo de divs--}}
    {{--<div class="col-sm-12">--}}
        {{--<div class="col-sm-12 col-lg-6">--}}
            {{--AAAA--}}
        {{--</div>--}}
        {{--<div class="col-sm-12 col-lg-6">--}}
            {{--<div class="col-sm-6">--}}
                {{--BBB--}}
            {{--</div>--}}
            {{--<div class="col-sm-6">--}}
                {{--CCC--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('inicio') }}">Início</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="{{ route('inicio') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clientes<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('formCliente') }}">Cadastro de Cliente</a></li>
                            <li><a href="{{ route('listaCliente') }}">Lista de Clientes</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('inicio') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Imóveis<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('formImovel') }}">Cadastro de Imóveis</a></li>
                            <li><a href="{{ route('listaImovel') }}">Lista de Imóveis</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('inicio') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Simulações<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('formSimulacao') }}">Efetuar Simulação</a></li>
                            <li><a href="{{ route('listaSimulacao') }}">Lista de Simulações</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

<!--
    {{--<nav class="navbar navbar-inverse navbar-fixed-top">--}}
        {{--<div class="container">--}}
            {{--<div class="navbar-header">--}}
                {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">--}}
                    {{--<span class="sr-only">Toggle navigation</span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                {{--</button>--}}
                {{--<a class="navbar-brand" href="#">Bootstrap theme</a>--}}
            {{--</div>--}}
            {{--<div id="navbar" class="navbar-collapse collapse">--}}
                {{--<ul class="nav navbar-nav">--}}
                    {{--<li class="active"><a href="#">Home</a></li>--}}
                    {{--<li><a href="{{ route('inicio') }}">About</a></li>--}}
                    {{--<li><a href="{{ route('inicio') }}">Contact</a></li>--}}
                    {{--<li class="dropdown">--}}
                        {{--<a href="{{ route('inicio') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li><a href="{{ route('inicio') }}">Action</a></li>--}}
                            {{--<li><a href="{{ route('inicio') }}">Another action</a></li>--}}
                            {{--<li><a href="{{ route('inicio') }}">Something else here</a></li>--}}
                            {{--<li role="separator" class="divider"></li>--}}
                            {{--<li class="dropdown-header">Nav header</li>--}}
                            {{--<li><a href="{{ route('inicio') }}">Separated link</a></li>--}}
                            {{--<li><a href="{{ route('inicio') }}">One more separated link</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div><!--/.nav-collapse -->--}}
        {{--</div>--}}
    {{--</nav>--}}

    {{--</nav>--}}
    {{--<nav class="navbar navbar-inverse navbar-fixed-top">--}}
        {{--<ul>--}}
            {{--<il><a href="{{ url('/CadastrarCliente') }}">Cadastro de Cliente</a></il>--}}
            {{--<il><a href="{{ route('formImovel') }}">Cadastro de Imóveis</a></il>--}}
            {{--<il><a href="{{ route('formSimulacao') }} ">Simular Financiamento</a></il><br>--}}
            {{--<il><a href="{{ route('listaCliente') }}">Lista de Clientes</a> </il>--}}
            {{--<il><a href="{{ route('listaImovel') }} ">Lista de Imóveis</a></il>--}}
            {{--<il><a href="{{ route('listaSimulacao') }} ">Lista de Simulações</a></il>--}}
        {{--</ul>--}}
    {{--</nav>--}}
    -->
</header>
</body>
</html>