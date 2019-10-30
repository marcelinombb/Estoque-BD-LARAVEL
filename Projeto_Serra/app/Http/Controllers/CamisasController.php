<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CamisasController extends Controller
{

    public function __construct(){
        $this->middleware('my-middleware',['only'=>['adicionaform','adicionar','updateform','update']]);
    }

    public function fornecedores(){
        $fornecedores = DB::select('select * from fornecedor');
        return $fornecedores;
    }
    public function adicionaform(){
        return view('adicionar')->with("fornecedores",CamisasController::fornecedores());
    }

    public function adicionar(){
        unset($_POST['_token']);
        //DB::insert('insert into produtos(nome,preco,quantidade,id_fornecedor) values(?, ?, ?, ?)', $_POST);
        DB::table('produtos')->insert($_POST);
        return redirect('/listadecamisas');
    }

    public function listagem(){
        $camisas = DB::select('select produtos.*,fornecedor.nome as fornecedor from produtos,fornecedor where produtos.id_fornecedor = fornecedor.id');
        return view('listadecamisas')->with('camisas',$camisas);
    }

    public function excluir($id){
        $excluir = DB::delete('delete from produtos where id = ?', [$id]);
        return redirect('/listadecamisas');
    }
    
    public function updateform($id){
        $produto = DB::select('select * from produtos where id = ?', [$id]);
        $dados = ['dados'=>$produto,'fornecedores'=>CamisasController::fornecedores()];
        return view('update')->with('dados',$dados);
    }

    public function update(){
        unset($_POST['_token']);
/* $query = 'update produtos set nome ="'.$_POST['nome'].'", preco = '.$_POST['preco'].', quantidade = '.$_POST['quantidade'].',
         id_fornecedor = '.$_POST['id_fornecedor']. ' where Id = '.$_POST['id'];        
        DB::update($query); */
        $id = $_POST['id'];
        unset($_POST['id']);
        DB::table('produtos')->updateOrInsert(["Id"=>$id], $_POST);
        return redirect('/listadecamisas'); 

    }

}
 