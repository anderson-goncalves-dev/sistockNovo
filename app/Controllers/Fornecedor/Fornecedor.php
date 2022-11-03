<?php
namespace App\Controllers\fornecedor;

use CodeIgniter\Controller;
use App\Models\ModelFornecedor\FornecedorModel;

class Fornecedor extends Controller{

    protected $fornecedoresModel;

    public function __construct(){
        helper('form');
        $this->fornecedoresModel = new FornecedorModel();
    }

    public function index(){
        

        $fornecedores = $this->fornecedoresModel->findAll();

        $variaveis=[
            'titulo'=>'Fornecedores',
            'fornecedores'=>$fornecedores
                ];
        echo view('templates/header',$variaveis);
        echo view('fornecedorView/listarfornecedor',$variaveis);
}
public function create(){
    return view('fornecedorView/formfornecedor');
    
}
public function store(){
    $informacoes = ['link'=>'fornecedor', 'nome'=>'Fornecedor'];
   
    $dados = $this->request->getPost();
    
    $request = $this->fornecedoresModel->save($dados);

    if($request){
        echo view('mensagens/sucesso',$informacoes);

    }else{
        echo view('mensagens/erro', $informacoes);
    }
}
public function edit($id = null){
    $fornecedor = $this->fornecedoresModel->find($id);

   echo view('FornecedorView/formFornecedor',['fornecedor'=>$fornecedor]);
}
public function detalhar($id = null){
    $fornecedor = $this->fornecedoresModel->find($id);

   echo view('FornecedorView/detalharFornecedor',['fornecedor'=>$fornecedor]);
}
}