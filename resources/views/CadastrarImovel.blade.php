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


<h2 class="st_1">Cadastramento de Imóveis:</h2>
<section id="cadstr_clientes">
    <fieldset>
        <form action="{{route('cadastroImovel')}}" method="POST">
            {{ csrf_field() }}
            <label for="inome">Nome do Empreendimento: </label>
            <input type="text" name="nome" id="inome" placeholder="Nome" maxlength="50">
            <label for="iunidade">Unidade: </label>
            <input type="number" name="unidade" id="iunidade" placeholder="Unidade" maxlength="5"> <!--Supõe-se a Unidade como um código individual de 5 dígitos------------------------------>
            <label for="ipreco">Preço: </label>
            <input type="text" name="preco" id="ipreco" placeholder="Valor em reais">
            <input type="submit" name="publicar" value="Publicar">
        </form>
    </fieldset>
</section>
</body>
</html>

