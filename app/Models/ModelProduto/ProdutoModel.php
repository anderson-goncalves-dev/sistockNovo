<?php 
namespace App\Models\ModelProduto;
use CodeIgniter\Model;
class ProdutoModel extends Model{

    protected $table = 'produto';
    protected $primaryKey = 'idProduto'; 
    protected $allowedFields= [
        'marca', 'quantidade', 'precoCompra', 'precoVenda'
    ];

}