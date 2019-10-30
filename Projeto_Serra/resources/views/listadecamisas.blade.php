@extends('layouts.app')
@section('content')
<table class="table table-hover table-striped text-center">
    <th>Nome</th>
    <th>Valor</th>
    <th>Quantidade</th>
    <th>Ações</th>
    @foreach ($camisas as $item)
    <tr>
        <td>{{$item->nome}}</td>
        <td>{{$item->preco}}</td>
        <td>{{$item->quantidade}}</td>
        <td>
            
            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal"
                data-target="#modalExemplodetalhes{{$item->Id}}">
                <i class='tiny material-icons'>search</i>
            </button>
            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal"
                data-target="#modalExemplodelete{{$item->Id}}">
                <i class='tiny material-icons'>delete_forever</i>
            </button>
            <a href='/updateform/{{$item->Id}}' class="btn btn-success btn-xs">
                <i class='tiny material-icons'>update</i>
            </a>
            <div class="modal fade" id="modalExemplodetalhes{{$item->Id}}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2>{{$item->nome}}</h2>
                        </div>
                        <div class="modal-body">

                            <ul>
                                <li class="text-left">Valor {{$item->preco}}</li>
                                <li class="text-left">Quantidade {{$item->quantidade}}</li>
                                <li class="text-left">Fornecedor {{$item->fornecedor}}</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="modalExemplodelete{{$item->Id}}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Deletar {{$item->nome}} ?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h3>deseja deletar esse item?</h3>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">Não</button>
                            <a href="/excluir/{{$item->Id}}" class="btn btn-danger">Sim</a>

                        </div>
                    </div>
                </div>
            </div>
        </td>
    </tr>
    @endforeach
</table>
@endsection
