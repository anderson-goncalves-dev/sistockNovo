<p><?php echo anchor('Fornecedor/Fornecedor/create', '>>> Adicionar Fornecedor') ?></p>

<table>
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>CNPJ</th>
        <th>Telefone</th>
        <th>Ações</th>
    </tr>
    <?php foreach($fornecedores as $fornecedor):?>
        <tr>
            <td><?php echo $fornecedor['idFornecedor'];?></td>
            <td><?php echo $fornecedor['nome']; ?></td>
            <td><?php echo $fornecedor['cnpj']; ?></td>
            <td><?php echo $fornecedor['telefone']; ?></td>
            <td>
                <?php echo anchor('Fornecedor/Fornecedor/edit/'.$fornecedor['idFornecedor'],'Editar') ?>
                -
                <?php echo anchor('Fornecedor/Fornecedor/detalhar/'.$fornecedor['idFornecedor'],'Detalhar') ?>    
            </td>
        </tr>
        <?php endforeach ?>
</table>