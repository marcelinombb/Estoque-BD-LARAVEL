@extends('layouts.app')
@section('content')


    <form action="/adicionar" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" name='nome' class='form-control' required>
        </div>
        <div class="form-group">
            <label for="">Preço</label>
            <input type="number" step=0.01 name='preco' class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Quantidade</label>
            <input type="number" class="form-control" name='quantidade' required>
        </div>
        <div class="form-group">
            <select name="id_fornecedor" id="" required class="form-control">
                <option value="" selected disabled>Selecione o Fornecedor</option>
                @foreach ($fornecedores as $item)
                    <option value="{{$item->id}}" name='id_fornecedor'>{{$item->nome}}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" class='btn-primary btn-block'>
    </form>
@endsection