@extends('shared.base')
@section('content')
    <div class="panel panel-default">    
        <div class="panel-heading">Lista de Produtos</div>
        <form method="GET" action="{{route('produtos.index', 'buscar' )}}">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="pesquise..." name="buscar">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Pesquisar</button>
                    </span>
                </div>
            </div>
        </div>
        </form>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Descrição</th>
                            <th>Grupo</th>
                            <th>Qtd. Disponível</th>
                            <th>Ações</th>
                        </tr>
                    </thead>            
                    <tbody>            
                        @foreach($produtos as $produto)
                            <tr>
                                <td>{{$produto->codigoProduto}}</td>
                                <td>{{$produto->descricao}}</td>
                                <td>{{$produto->grupo}}</td>
                                <td>{{$produto->qtdeDisponivel}}</td>
                                <td>
                                    <a href="{{route('produtos.edit', $produto->idProduto)}}"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="{{route('produtos.remove', $produto->idProduto)}}"><i class="glyphicon glyphicon-trash"></i></a>
                                    <a href="{{route('produtos.show', $produto->codigoProduto)}}"><i class="glyphicon glyphicon-zoom-in"></i></a>
                                </td>                                
                            </tr>                         
                        @endforeach                                 
                    </tbody>
                </table> 
            </div> 
        </div>
        <div align="center" class="row">
		    
	    </div>
    </div>
    <a href="{{route('produtos.create')}}"><button class="btn btn-primary">Adicionar</button></a>
@endsection