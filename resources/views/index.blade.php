<! DOCTYPE html>

<html lang="pt-br">
<head>
    <title>Simulação Habitacional</title>
    <meta charset="utf-8">

    <!--Link para a fonte e para o arquivo de estilos -->
    {{--<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">--}}
    {{--<link rel="stylesheet" type="text/css" href="css/estilos.css">--}}
</head>

<body>
<header class="cabeçario_1">
    <h1 class="logo">Imobiliária Lothus</h1>
    <h2 class="titulo_1">Simulação Habitacional MCMV</h2>

    <!--MENU---------------------------------------------------------->
    <nav class="menu_1">
        <ul>
            <il><a href="{{ url('/CadastrarCliente') }}">Cadastro de Cliente</a></il>
            <il><a href="{{ route('formImovel') }}">Cadastro de Imóveis</a></il>
            <il><a href=" ">Simular Financiamento</a></il><br>
            <il><a href="{{ route('listaCliente') }}">Lista de Clientes</a> </il>
            <il><a href=" ">Lista de Imóveis</a></il>
            <il><a href=" ">Lista de Simulações</a></il>
        </ul>
    </nav>
</header>
</body>
</html>