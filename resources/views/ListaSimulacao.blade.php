<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Simulação Habitacional</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <script src="/js/app.js"></script>
</head>

<body>

<div class="col-lg-offset-0 col-lg-12">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
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
                        <a href="{{ route('inicio') }}" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Clientes<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('formCliente') }}">Cadastro de Cliente</a></li>
                            <li><a href="{{ route('listaCliente') }}">Lista de Clientes</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('inicio') }}" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Imóveis<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('formImovel') }}">Cadastro de Imóveis</a></li>
                            <li><a href="{{ route('listaImovel') }}">Lista de Imóveis</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('inicio') }}" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Simulações<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('formSimulacao') }}">Efetuar Simulação</a></li>
                            <li><a href="{{ route('listaSimulacao') }}">Lista de Simulações</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</div>
<div class="jumbotron">
    <div class="col-lg-offset-0 col-lg-12">
        <h2 class="titulo_2">Imobiliária Lothus - Simulação Habitacional MCMV</h2>
    </div>
</div>

<div class="col-lg-offset-0 col-lg-12">
    <h2 class="st_1">Lista de Simulações</h2>
</div>
</div>

<section id="list_imoveis">

    <!--------------Tabela---------------------->
    <table class="table table-bordered">
        <thead>
        <tr>
            <td>Nome do Cliente</td>
            <td>Unidade</td>
            <td>Preço</td>
            <td>Entrada</td>
            <td>Subsídio</td>
            <td>Juros</td>
            <td>Número de parcelas</td>
            <td>Status</td>
            <td>Excluir</td>
        </tr>
        </thead>
        <tbody>
        @if($simulacoes)

            @foreach($simulacoes as $simulacao)

                {{--                {{dump($simulacao->id)}}--}}
                {{--                {{dump($simulacao->cliente)}}--}}
                {{--                {{die()}}--}}
                {{--@if($simulacao->id == 21)--}}
                {{--{{dd($simulacao->cliente)}}--}}
                {{--@endif--}}

                <tr>
                    {{--{{dump($simulacao) }}--}}
                    {{--{{dump($simulacao->cliente) }}--}}

                    <td>{{ $simulacao->cliente->nome }}</td>
                    <td>{{ $simulacao->imovelId }}</td>
                    <td>{{ $simulacao->imovel->preco }}</td>
                    <td>{{ $simulacao->entrada }}</td>
                    <td>{{ $simulacao->subsidio }}</td>
                    <td>{{ $simulacao->juros }}</td>
                    <td>{{ $simulacao->nParcelas }}</td>
                    <td>{{ $simulacao->estado }}</td>
                    <td>
                        <form action="{{ route('excluiCadastro') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="submit" name="delSimulacao[]" value="{{ $simulacao->id }}">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('age') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="aceitar[]" value="{{ $simulacao->id }}">
                            <button type="submit">Aceitar</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('age') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="negar[]" value="{{ $simulacao->id }}">
                            <button type="submit">Negar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
</section>
</body>
</html>