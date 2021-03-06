@extends('shared.base')

@section('content')
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif
    <div class="panel panel-default">

        <div class="panel-heading"><h3>Cadastro de Produto</h3></div>
        <div class="panel-body">

    <form method="post" action="{{route ('produtos.store')}}">
        {{ csrf_field() }}
        <h4>Dados do produto</h4>
        <hr>
        <div class="form-group">
            <label for="Codigo">Código Produto</label>
            <input type="text" class="form-control" placeholder="Código Produto" name="codigoProduto" required>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="preco">Descrição</label>
                    <input type="text" class="form-control" placeholder="Descrição" name="descricao" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="qtdQuartos">Grupo</label>
                    <input type="text" class="form-control" placeholder="Grupo" required name="grupo">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="qtdeDisponivel">Qtd. Disponível</label>
                    <input type="number" class="form-control" placeholder="Qtd. Disponível" required name="qtdeDisponivel">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="qtdeAlugada">Qtd. Alugada</label>
                    <input type="number" class="form-control" placeholder="Qtd. Alugada" required name="qtdeAlugada">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nomeImagem">Caminho Imagem</label>
                    <input type="text" class="form-control" placeholder="Caminho Imagem" required name="nomeImagem">
                </div>
            </div>
        </div>
        
        <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
        </div>
    </div>

@endsection