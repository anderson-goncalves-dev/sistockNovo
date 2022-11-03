<?php 
namespace App\Models\ModelFuncionario;
use CodeIgniter\Model;
class FuncionarioModel extends Model{

    protected $table = 'funcionario';
    protected $primaryKey = 'idFuncionario'; 
    protected $allowedFields= [
        'nome', 'telefone', 'salario', 'cpf','endereco', 'tipo', 'login', 'senha'
    ];

}