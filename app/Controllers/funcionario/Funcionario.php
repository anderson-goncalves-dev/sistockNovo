<?php
namespace App\Controllers\funcionario;

use CodeIgniter\Controller;
use App\Models\ModelFuncionario\FuncionarioModel;

class Funcionario extends Controller{

    protected $funcionariosModel;

    public function __construct(){
        helper('form');
        $this->funcionariosModel = new FuncionarioModel();
    }

    public function index(){
        

        $funcionarios = $this->funcionariosModel->findAll();

        $variaveis=[
            'titulo'=>'Funcionarios',
            'funcionarios'=>$funcionarios
                ];
        echo view('templates/header',$variaveis);
        echo view('funcionarioView/listarfuncionario',$variaveis);
}
public function create(){
    return view('funcionarioView/formfuncionario');
    
}
public function store(){
    $informacos = ['link'=>'funcionario', 'nome'=>'Funcionario'];
   
    $dados = $this->request->getPost();
    
    $request = $this->funcionariosModel->save($dados);

    if($request){
        echo view('mensagens/sucesso',$informacos);

    }else{
        echo view('mensagens/erro', $informacos);
    }
}
public function edit($id = null){
    $funcionario = $this->funcionariosModel->find($id);

   echo view('FuncionarioView/formFuncionario',['funcionario'=>$funcionario]);
}
public function detalhar($id = null){
    $funcionario = $this->funcionariosModel->find($id);

   echo view('FuncionarioView/detalharFuncionario',['funcionario'=>$funcionario]);
}
}