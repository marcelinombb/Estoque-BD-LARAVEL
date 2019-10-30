@extends('layouts.app')
@section('content')
@foreach ($dados['dados'] as $up)
    
<form action="/update" method="post">
    @csrf
    <div class="form-group">
        <label for="">Nome</label>
        <input  value={{$up->nome}} type="text" name='nome' class='form-control' required placeholder="">
    </div>
        <div class="form-group">
            <label for="">Preço</label>
            <input value={{$up->preco}} type="number" step=0.01 name='preco' class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Quantidade</label>
            <input value={{$up->quantidade}} type="number" class="form-control" name='quantidade' required>
        </div>
        <div class="form-group">
            <select name="id_fornecedor" id="" required class="form-control" >
                <option value="" selected disabled>Selecione o Fornecedor</option>
                @foreach ($dados['fornecedores'] as $item)
                    <option value="{{$item->id}}" name='id_fornecedor'>{{$item->nome}}</option>
                @endforeach
            </select>
        </div>
        <input type="hidden" value="{{$up->Id}}" name="id">
        <input type="submit" class='btn-primary btn-block'>
    </form>
    @endforeach
    @endsection