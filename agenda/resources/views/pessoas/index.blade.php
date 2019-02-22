@extends("template.app")

@section("content")
    <div>
        @foreach($pessoas as $pessoa)
            <div class="card bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">{{ $pessoa->nome }}</div>
                <div class="card-body">
                    <h5 class="card-title">Dados de Contato</h5>
                    <p class="card-text">
                    @foreach($pessoa->telefones as $telefone)
                        <p><strong>Telefone: </strong> ({{ $telefone->ddd }}) {{ $telefone->telefone }} </p>
                    @endforeach
                    </p>
                </div>
            </div>
        @endforeach
    </div>
@endsection