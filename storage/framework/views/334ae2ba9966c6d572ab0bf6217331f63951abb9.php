<! DOCTYPE html>

<html lang="pt-br">
<head>
    <title>Simulação Habitacional</title>
    <meta charset="utf-8">

    <!--Link para a fonte e para o arquivo de estilos -->
    
    
</head>

<body>
<header class="cabeçario_1">
    <h1 class="logo">Imobiliária Lothus</h1>
    <h2 class="titulo_1">Simulação Habitacional MCMV</h2>

    <!--MENU---------------------------------------------------------->
    <nav class="menu_1">
        <ul>
            <il><a href="<?php echo e(url('/CadastrarCliente')); ?>">Cadastro de Cliente</a></il>
            <il><a href="<?php echo e(route('formImovel')); ?>">Cadastro de Imóveis</a></il>
            <il><a href=" ">Simular Financiamento</a></il><br>
            <il><a href="<?php echo e(route('listaCliente')); ?>">Lista de Clientes</a> </il>
            <il><a href=" ">Lista de Imóveis</a></il>
            <il><a href=" ">Lista de Simulações</a></il>
        </ul>
    </nav>
</header>
</body>
</html>