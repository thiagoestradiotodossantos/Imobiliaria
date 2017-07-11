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
            <il><a href="{{ route('listaImovel') }}">Lista de Imóveis</a></il>
        </ul>
    </nav>
</header>

<!------------------------------------LISTA DE IMOVEIS------------------------------------------------>
<h2 class="st_2">Lista de imoveis</h2>
<section id="list_imoveis">

    <!--------------Tabela---------------------->
    <table border="1">
        <thead>
        <tr> <td>Nome do Empreendimento</td> <td>Unidade</td> <td>Preço</td> <td>Excluir Cadastro</td></tr>
        </thead>
        <tbody>
        @if($imoveis)
            @foreach($imoveis as $imovel)
                <tr>
                    <td>{{$imovel->nome}}</td>
                    <td>{{$imovel->unidade}}</td>
                    <td>{{$imovel->preco}}</td>
                    <td>
                        <form action="{{ route('excluiCadastro') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="submit" name="delImovel" value="{{ $imovel->id }}">
                        </form>
                    </td>
                </tr>
        @endforeach
        @endif
        <tbody>

        </tbody>
    </table>
</section>
</body>
</html>