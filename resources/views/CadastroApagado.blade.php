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

<div class="alert alert-info" role="alert" >
    <strong>Cadastro apagado com sucesso!</strong> Clique em VOLTAR para retornar à lista.
</div>
{{--<div class="col-md-3">--}}
@if($voltar == 1)
    <a class="btn btn-default" href="{{ route('listaCliente') }}" hole="button">Voltar</a>
    {{--<a class="btn btn-default" href="#" role="button">Link</a>--}}
@endif

@if($voltar == 2)
    <a href="{{ route('listaImovel') }}">Voltar</a>
@endif

@if($voltar == 3)
    <a href="{{ route('listaSimulacao') }}">Voltar</a>
@endif
</div>
</body>
</html>
