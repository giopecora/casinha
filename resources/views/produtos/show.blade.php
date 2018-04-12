@extends('shared.base')
@section('content')
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Detalhes do Produto</div>
        <div class="panel-body">  
            <div class="row">
                <div class="col-md-12">
                    <h4>Sobre o Produto</h4>
                    <p>Descrição: {{$produto->descricao}}</p>
                    <p>Grupo: {{$produto->grupo}}</p>
                    <p>Quantidade Disponível: {{$produto->qtdeDisponivel}}</p>
                    <p>Quantidade Alugada: {{$produto->qtdeAlugada}}</p>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
@endsection