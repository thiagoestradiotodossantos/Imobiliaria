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
            <il><a href="<?php echo e(url('/')); ?>">Início</a></il>
            <il><a href="<?php echo e(route('formCliente')); ?>">Cadastro de Cliente</a></il>
            <il><a href="<?php echo e(route('formImovel')); ?>">Cadastro de Imóveis</a></il>
            <il><a href="<?php echo e(route('listaCliente')); ?>">Lista de Clientes</a> </il>
        </ul>
    </nav>
</header>

<h2 class="st_1">Cadastramento de Cliente</h2>
<fieldset>
    <form action="<?php echo e(route('cadastroCliente')); ?>" method="POST">
    <?php echo e(csrf_field()); ?> <!--Token de verificação necessário para o funcionamento do POST-->
        <label for="icpf">CPF: </label>
        <input type="number" name="cpf" id="icpf" placeholder="Apenas números">
        <label for="inome">Nome: </label>
        <input type="string" name="nome" id="inome" placeholder="Nome Completo">
        <label for="iidade">Idade: </label>
        <input for="iidade" name="idade" id="iidade" placeholder="Apenas Números">
        <label for="irenda">Renda: </label>
        <input for="irenda" name="renda" id="irenda" placeholder="Valor em reais">
        <input type="submit" name="publicar" value="Publicar">
    </form>
</fieldset>
</body>
</html>
