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






<!------------------------------------LISTA DE CLIENTES------------------------------------------------>
<h2 class="st_2">Lista de clientes</h2>
<section id="list_clientes">

    <!--------------Tabela---------------------->
    <table border="1">
        <thead>
        <tr> <td>CPF</td> <td>Nome</td> <td>Idade</td> <td>Renda</td> <td>Excluir Cadastro</td></tr>
        </thead>
        <tbody>
        <?php if($clientes): ?>
            <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($cliente->cpf); ?></td><td><?php echo e($cliente->nome); ?></td><td><?php echo e($cliente->idade); ?></td><td><?php echo e($cliente->renda); ?></td><td><a href="<?php echo e(route('excluiCadastro', ['id'=>$cliente->id])); ?>">Excluir</a></td>
                </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <tbody>

        </tbody>
    </table>
</section>
</body>
</html>