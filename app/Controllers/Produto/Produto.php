<?php
namespace App\Controllers\Produto;

use CodeIgniter\Controller;
use App\Models\ModelProduto\ProdutoModel;

class Produto extends Controller{

    protected $ProdutosModel;

    public function __construct(){
        helper('form');
        $this->produtosModel = new ProdutoModel();
    }

    public function index(){
        

        $produtos = $this->produtosModel->findAll();

        $variaveis=[
            'titulo'=>'Produtos',
            'produtos'=>$produtos
                ];
        echo view('templates/header',$variaveis);
        echo view('ProdutoView/listarProduto',$variaveis);
}
public function create(){

    return view('ProdutoView/formProduto');
    
}
public function store(){
    $informacoes = ['link'=>'produto', 'nome'=>'Produto'];

    $dados = $this->request->getPost();
    
    $request = $this->produtosModel->save($dados);

    if($request){
        echo view('mensagens/sucesso',$informacoes);

    }else{
        echo view('mensagens/erro',$informacoes);
    }
}
public function edit($id = null){
    $produto = $this->produtosModel->find($id);

   echo view('ProdutoView/formProduto',['produto'=>$produto]);
}
public function detalhar($id = null){
    $produto = $this->produtosModel->find($id);

   echo view('ProdutoView/detalharProduto',['produto'=>$produto]);
}
}