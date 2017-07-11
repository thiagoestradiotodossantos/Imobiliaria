<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Simulação Habitacional</title>
    <meta charset="utf-8">
</head>

<body>
<header class="cabeçario_2">
    <h2 class="titulo_2">Imobiliária Lothus - Simulação Habitacional MCMV</h2>
    <nav class="menu_2">
        <ul>
            <il><a href="{{ url('/') }}">Início</a></il>
            <il><a href="{{ route('formCliente') }}">Cadastro de Cliente</a></il>
            <il><a href="{{ route('formImovel') }}">Cadastro de Imóveis</a></il>
            <il><a href="{{ route('listaCliente') }}">Lista de Clientes</a> </il>
        </ul>
    </nav>
</header>

{{--<ul>--}}
{{--@foreach($clientes as $cliente)--}}
{{--<li>{{ $cliente->nome}}</li>--}}
{{--@endforeach--}}
{{--</ul>--}}
<!------------------------------------LISTA DE CLIENTES------------------------------------------------>
<h2 class="st_2">Lista de clientes</h2>
<section id="list_clientes">

    <!--------------Tabela---------------------->
    <table border="1">
        <thead>
        <tr> <td>CPF</td> <td>Nome</td> <td>Idade</td> <td>Renda</td> <td>Excluir Cadastro</td></tr>
        </thead>
        <tbody>
        @if($clientes)
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{$cliente->cpf}}</td><td>{{$cliente->nome}}</td><td>{{$cliente->idade}}</td><td>{{$cliente->renda}}</td><td><a href="{{ route('excluiCadastro', ['id'=>$cliente->id])}}">Excluir</a></td>
                </tr>
        @endforeach
        @endif
        <tbody>

        </tbody>
    </table>
</section>
</body>
</html>