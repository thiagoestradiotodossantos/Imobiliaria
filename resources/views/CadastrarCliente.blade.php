<!DOCTYPE html>
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
        <h2 class="st_1">Cadastramento de Cliente</h2>
    </div>
</div>

{{--FORMULÁRIO--}}

<form class="form-horizontal" action="{{route('cadastroCliente')}}" method="POST">
{{ csrf_field() }} <!--Token de verificação necessário para o funcionamento do POST-->
    <div class="form-group">
        <label for="icpf" class="col-sm-2 control-label">CPF: </label>
        <div class="col-sm-10">
            <input type="number" name="cpf" id="icpf" placeholder="Apenas números">
        </div>
    </div>

    <div class="form-group">
        <label for="inome" class="col-sm-2 control-label">Nome: </label>
        <div class="col-sm-10">
            <input type="string" name="nome" id="inome" placeholder="Nome Completo">
        </div>
    </div>

    <div class="form-group">
        <label for="iidade" class="col-sm-2 control-label">Idade: </label>
        <div class="col-sm-10">
            <input name="idade" id="iidade" placeholder="Apenas Números">
        </div>
    </div>

    <div class="form-group">
        <label for="irenda" class="col-sm-2 control-label">Renda: </label>
        <div class="col-sm-10">
            <input name="renda" id="irenda" placeholder="Valor em reais">
        </div>
    </div>

    <div class="form-group col-sm-3 control-label">
            <input type="submit" name="publicar" value="Publicar">
    </div>

</form>

</body>
</body>
</html>
