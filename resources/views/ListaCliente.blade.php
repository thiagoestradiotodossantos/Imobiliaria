<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Simulação Habitacional</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <script src="/js/app.js"></script>
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">--}}
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>--}}

</head>

<body>

<!--Barra de Navegação Fixa-->
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


@if($errors->first())

    {{--{{dump($errors->first())}}--}}
    {{--    <h4>{{$errors->first()}}</h4>--}}
    <div class="alert alert-info" role="alert">
        <strong>{{$errors->first()}}</strong> A operação foi realizada com sucesso. Atente-se à lista de simulações.
    </div>
@endif


<div class="col-lg-offset-0 col-lg-12">
    <h2 class="st_1">Lista de Clientes</h2>
</div>
</div>
<!------------------------------------LISTA DE CLIENTES------------------------------------------------>
<section id="list_clientes">
    <!--------------Tabela---------------------->
    {{--<div class="table-responsive">--}}
    <table class="table table-bordered">
        <thead>
        <tr>
            <td>CPF</td>
            <td>Nome</td>
            <td>Idade</td>
            <td>Renda</td>
            <td>Excluir Cadastro</td>
        </tr>
        </thead>
        <tbody>
        @if($clientes)
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{$cliente->cpf}}</td>
                    <td>{{$cliente->nome}}</td>
                    <td>{{$cliente->idade}}</td>
                    <td>{{$cliente->renda}}</td>
                    {{--<td><a href="{{ route('excluiCadastro', ['id'=>$cliente->id, 1])}}">Excluir</a></td>--}}
                    <td>

                    <!--BOTÃO 3 Modal-->
                        <button type="button" class="abre-myModal btn btn-danger sm-lg" data-toggle="modal"
                                data-target="#myModal"
                                data-id="{{ $cliente->id }}"> Excluir
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                             data-b>
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Atenção!</h4>
                                    </div>

                                    <div class="modal-body">
                                        <h5>Tem certeza que deseja excluir o cadastro?</h5>
                                    </div>

                                    <div class="modal-footer">
                                        <div class="modal-footer" style="display: flex">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar
                                            </button>
                                            <div class="col-md-2 col-md-offset-0">
                                                <form action="{{ route('excluiCadastro') }}" method="POST">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input id="dell" type="hidden" name="delCliente[]" value="">
                                                    <button type="submit" class="btn btn-primary">Confirmar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
        @endforeach
        @endif
        <tbody>

        </tbody>
    </table>
</section>
</body>

<script>
    $(".abre-myModal").on("click", function () {
        var myIdCliente = $(this).data('id');
        $("#dell").val(myIdCliente);
    });
</script>

</html>