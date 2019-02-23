@extends('template.app')

@section('content')
    <div class="col-md-12">
        <h3>Editar contato</h3>
    </div>

    <div class="col-md-6 well">
        <form class="col-md-12" action="{{ url('/pessoas/update') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $pessoa->id }}">
            <div class="form-group col-md-12">
                <label class="control-label">Nome</label>
                <input type="text" name="nome" value="{{ $pessoa->nome }}" class="form-control" placeholder="Nome">
            </div>
            <div class="col-md-12">
                <button style="meargin-top: 5px; float: right" class="btn btn-primary">
                    salvar
                </button>
            </div>
        </form>
    </div>
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
@endsection