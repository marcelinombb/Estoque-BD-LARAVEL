@extends('listadecamisas')
@section('detalhes')
    <div class="modal fade" id="modalExemplodetalhes" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2>{{$item->nome}}</h2>
                        </div>
                        <div class="modal-body">
                            
                            <ul>
                                <li class = "text-left">Valor {{$item->preco}}</li>
                                <li class = "text-left">Quantidade {{$item->quantidade}}</li>
                                <li class = "text-left">Id do Fornecedor {{$Fornecedor}}</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>

                        </div>
                    </div>
                </div>
            </div>
@endforeach
@endsection
