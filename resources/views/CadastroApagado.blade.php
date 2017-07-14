<h3>Cadastro apagado com sucesso!</h3>

@if($voltar == 1)
    <a href="{{ route('listaCliente') }}">Voltar</a>
@endif

@if($voltar == 2)
    <a href="{{ route('listaImovel') }}">Voltar</a>
@endif

@if($voltar == 3)
    <a href="{{ route('listaSimulacao') }}">Voltar</a>
@endif
