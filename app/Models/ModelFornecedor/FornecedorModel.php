<?php 
namespace App\Models\ModelFornecedor;
use CodeIgniter\Model;
class FornecedorModel extends Model{

    protected $table = 'fornecedor';
    protected $primaryKey = 'idFornecedor'; 
    protected $allowedFields= [
        'nome', 'telefone', 'email', 'cnpj','endereco'
    ];

}