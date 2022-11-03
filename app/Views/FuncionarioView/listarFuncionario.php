<p><?php echo anchor('Funcionario/Funcionario/create', '>>> Adicionar Funcionario') ?></p>

<table>
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Telefone</th>
        <th>Ações</th>
    </tr>
    <?php foreach($funcionarios as $funcionario):?>
        <tr>
            <td><?php echo $funcionario['idFuncionario'];?></td>
            <td><?php echo $funcionario['nome']; ?></td>
            <td><?php echo $funcionario['cpf']; ?></td>
            <td><?php echo $funcionario['telefone']; ?></td>
            <td>
                <?php echo anchor('Funcionario/Funcionario/edit/'.$funcionario['idFuncionario'],'Editar') ?>
                -
                <?php echo anchor('Funcionario/Funcionario/detalhar/'.$funcionario['idFuncionario'],'Detalhar') ?>    
            </td>
        </tr>
        <?php endforeach ?>
</table>