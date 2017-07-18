<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Simulação Habitacional</title>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="/css/app.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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

@if($errors->first())
    {{--<h4>{{$errors->first()}}</h4>--}}
    <div class="alert alert-info" role="alert">
        <strong>{{$errors->first()}}</strong> A operação foi realizada com sucesso.
    </div>
@endif

<div class="col-lg-offset-0 col-lg-12">
    <h2 class="st_1">Lista de Simulações</h2>
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

                {{--{{dd($simulacao) }}--}}
                {{--{{dump($simulacao->cliente) }}--}}
                @if($simulacao->cliente)
                    @if($simulacao->imovel)
                        <tr>
                            <td>{{ $simulacao->cliente->nome }}</td>
                            <td>{{ $simulacao->imovelId }}</td>
                            <td>{{ $simulacao->imovel->preco }}</td>
                            <td>{{ $simulacao->entrada }}</td>
                            <td>{{ $simulacao->subsidio }}</td>
                            <td>{{ $simulacao->juros }}</td>
                            <td>{{ $simulacao->nParcelas }}</td>
                            <td>{{ $simulacao->estado }}</td>
                            <td>
                                {{--<form action="{{ route('excluiCadastro') }}" method="POST">--}}
                                {{--{{ csrf_field() }}--}}
                                {{--<input type="submit" name="delSimulacao[]" value="{{ $simulacao->id }}">--}}
                                {{--</form>--}}

                                {{--<form action="{{ route('excluiCadastro') }}" method="POST">--}}
                                {{--{{ csrf_field() }}--}}
                                {{--<input type="hidden" name="delSimulacao[]" value="{{ $simulacao->id }}">--}}
                                {{--<button type="submit">Excluir</button>--}}
                                {{--</form>--}}
                                <button type="button" class="abre-myModal btn btn-danger sm-lg" data-toggle="modal"
                                        data-target="#myModal"
                                        data-id="{{ $simulacao->id }}"> Excluir
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel"
                                     data-b>
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Atenção!</h4>
                                            </div>

                                            <div class="modal-body">
                                                <h5>Tem certeza que deseja excluir o cadastro?</h5>
                                            </div>

                                            <div class="modal-footer">
                                                <div class="modal-footer" style="display: flex">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                        Cancelar
                                                    </button>
                                                    <div class="col-md-2 col-md-offset-0">
                                                        <form action="{{ route('excluiCadastro') }}" method="POST">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <input id="dell" type="hidden" name="delSimulacao[]" value="">
                                                            <button type="submit" class="btn btn-primary">Confirmar
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                    @else
                        <div class="alert alert-danger" role="alert">
                            <strong>Ops!</strong> Simulação do cliente não pode ser
                            efetuada!
                            <form action="{{ route('excluiCadastro') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="delSimulacao[]" value="{{ $simulacao->id }}">
                                <button type="submit">Excluir</button>
                            </form>
                        </div>
                    @endif
                @else
                    <div class="alert alert-danger" role="alert">
                        <strong>Ops!</strong> Simulação do empreendimento não pode ser
                        efetuada!
                        <form action="{{ route('excluiCadastro') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="delSimulacao[]" value="{{ $simulacao->id }}">
                            <button type="submit">Excluir</button>
                        </form>
                    </div>
                @endif
            @endforeach
        @endif
        </tbody>
    </table>
</section>
</body>

<script>
    $(".abre-myModal").on("click", function () {
        var myIdSimulacao = $(this).data('id');
        $("#dell").val(myIdSimulacao);
    });
</script>

</html>