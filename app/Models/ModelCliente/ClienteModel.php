<?php 
namespace App\Models\ModelCliente;
use CodeIgniter\Model;
class ClienteModel extends Model{

    protected $table = 'cliente';
    protected $primaryKey = 'idCliente'; 
    protected $allowedFields= [
        'nome', 'telefone', 'email', 'cpf','endereco'
    ];

}