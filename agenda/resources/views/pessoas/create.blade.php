@extends('template.app')

@section('content')
    <div class="col-md-12">
        <h3>Novo contato</h3>
    </div>

    <div class="col-md-6 well">
        <form class="col-md-12" action="{{ url('/pessoas/store') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group col-md-12">
                <label class="control-label">Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome">
            </div>
            <div class="form-group col-md-4">
                <label class="control-label">DDD</label>
                <input type="text" name="ddd" class="form-control" placeholder="DDD">
            </div>
            <div class="form-group col-md-8">
                <label class="control-label">Telefone</label>
                <input type="text" name="telefone" class="form-control" placeholder="Telefone">
            </div>
            <div class="col-md-12">
                <button style="meargin-top: 5px; float: right" class="btn btn-primary">salvar</button>
            </div>
        </form>
    </div>
@endsection