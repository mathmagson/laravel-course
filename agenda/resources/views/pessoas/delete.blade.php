@extends('template.app')

@section('content')
    <div class="col-md-6 well">
        <div class="col-md-12">
            <h3>Deseja excluir esse contato?</h3>
            <div style="float: right">
                <a class="btn btn-default" href="{{ url("pessoas") }}">
                    <i class="glyphicon glyphicon-chevron-left"></i>
                    &nbsp;Cancelar
                </a>
                <a class="btn btn-danger" href="{{ url("pessoas/$pessoa->id/destroy") }}">
                    <i class="glyphicon glyphicon-remove"></i>
                    &nbsp;Excluir
                </a>
            </div>
        </div>
    </div>
    <div class="card border-danger mb-3" style="max-width: 18rem;">
        <div class="card-header">{{ $pessoa->nome }}</div>
        <div class="card-body text-danger">
            <h5 class="card-title">Dados de Contato</h5>
            <p class="card-text">
            @foreach($pessoa->telefones as $telefone)
                <p><strong>Telefone: </strong> ({{ $telefone->ddd }}) {{ $telefone->telefone }} </p>
                @endforeach
                </p>
        </div>
    </div>
@endsection