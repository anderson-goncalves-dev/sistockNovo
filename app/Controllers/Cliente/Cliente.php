<?php
namespace App\Controllers\Cliente;

use CodeIgniter\Controller;
use App\Models\ModelCliente\ClienteModel;

class Cliente extends Controller{

    protected $clientesModel;

    public function __construct(){
        helper('form');
        $this->clientesModel = new ClienteModel();
    }

    public function index(){
        

        $clientes = $this->clientesModel->findAll();

        $variaveis=[
            'titulo'=>'Clientes',
            'clientes'=>$clientes
                ];
        echo view('templates/header',$variaveis);
        echo view('ClienteView/listarCliente',$variaveis);
}
public function create(){

    return view('ClienteView/formCliente');
    
}
public function store(){
    $informacoes = ['link'=>'cliente', 'nome'=>'Cliente'];

    $dados = $this->request->getPost();
    
    $request = $this->clientesModel->save($dados);

    if($request){
        echo view('mensagens/sucesso',$informacoes);

    }else{
        echo view('mensagens/erro',$informacoes);
    }
}
public function edit($id = null){
    $cliente = $this->clientesModel->find($id);

   echo view('ClienteView/formCliente',['cliente'=>$cliente]);
}
public function detalhar($id = null){
    $cliente = $this->clientesModel->find($id);

   echo view('ClienteView/detalharCliente',['cliente'=>$cliente]);
}
}