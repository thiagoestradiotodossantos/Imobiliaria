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
</div> <!--Nav Bar-->
<div class="jumbotron">
    <div class="col-lg-offset-0 col-lg-12">
        <h2 class="titulo_2">Imobiliária Lothus - Simulação Habitacional MCMV</h2>
    </div>
</div> <!--Título-->

<div class="col-lg-offset-0 col-lg-12">
    <h2 class="st_1">Simular Financiamento</h2>
</div>

@if($errors->first())
{{--    <h4>{{$errors->first()}}</h4>--}}
    <div class="alert alert-danger" role="alert">
        <strong>{{$errors->first()}}</strong> A simulação não foi realizada. Por favor tente novamente.
    </div>
@endif

<form class="form-horizontal" action=" {{ route('cadastraSimulacao') }}" method="POST">
    {{csrf_field()}}
    <div class="form-group">
        <label for="iclienteid" class="col-sm-2 control-label">Cliente: </label>
        <div class="col-sm-10">
            <input type="string" name="clienteid" id="iclienteid" placeholder="CPF do cliente" autofocus="autofocus">
        </div>
    </div>
    <div class="form-group">
        <label for="iimovelid" class="col-sm-2 control-label">Imóvel: </label>
        <div class="col-sm-10">
            <input type="number" name="imovelid" id="iimovelid" placeholder="Unidade do imóvel">
        </div>
    </div>
    <div class="form-group">
        <label for="inparcelas" class="col-sm-2 control-label">Número de Parcelas: </label>
        <div class="col-sm-10">
            <input type="number" name="nparcelas" id="inparcelas" placeholder="Ou número de meses">
        </div>
    </div>
    <div class="form-group col-sm-3 control-label">
        <input type="submit" name="publicar" value="Publicar">
    </div>
</form>

{{--<form action=" {{ route('cadastraSimulacao') }}" method="POST">--}}
{{--{{ csrf_field() }}--}}
{{--<label for="iclienteid">Cliente: </label>--}}
{{--<input type="text" name="clienteid" id="iclienteid" placeholder="CPF do cliente" maxlength="11">--}}
{{--<!--Fazer lista com as opsões-->--}}
{{--<label for="iimovelid">Imóvel: </label>--}}
{{--<input type="number" name="imovelid" id="iimovelid" placeholder="Unidade do imóvel" maxlength="5">--}}
{{--<label for="inparcelas">Número de parcelas: </label>--}}
{{--<input type="number" name="nparcelas" id="inparcelas" placeholder="Ou número de meses">--}}
{{--<input type="submit" name="publicar" value="Publicar">--}}
{{--</form>--}}


</body>
</html>