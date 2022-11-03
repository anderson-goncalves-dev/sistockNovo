
<p><?php echo anchor('Cliente/Cliente/create', '>>> Adicionar Cliente') ?></p>

<table>
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Ações</th>
    </tr>
    <?php foreach($clientes as $cliente):?>
        <tr>
            <td><?php echo $cliente['idCliente'];?></td>
            <td><?php echo $cliente['nome']; ?></td>
            <td><?php echo $cliente['cpf']; ?></td>
            <td><?php echo $cliente['email']; ?></td>
            <td><?php echo $cliente['telefone']; ?></td>
            <td>
                <?php echo anchor('Cliente/Cliente/edit/'.$cliente['idCliente'],'Editar') ?>
                -
                <?php echo anchor('Cliente/Cliente/detalhar/'.$cliente['idCliente'],'Detalhar') ?>    
            </td>
        </tr>
        <?php endforeach ?>
</table>