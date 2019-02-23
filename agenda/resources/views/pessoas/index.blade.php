@extends("template.app")

@section("content")
    <style>
        .btn-action {
            padding: 5px;
            margin-left: 5px;
            float: right;
        }
    </style>
    <div>
        @foreach($pessoas as $pessoa)
            <div class="card bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">
                    {{ $pessoa->nome }}
                    <a href="{{ url("/pessoas/$pessoa->id/excluir") }}" class="btn btn-xs btn-danger btn-action">
                        <i class="glyphicon glyphicon-trash"></i>
                    </a>
                    <a href="{{ url("/pessoas/$pessoa->id/editar") }}" class="btn btn-xs btn-primary btn-action">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>
                </div>
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