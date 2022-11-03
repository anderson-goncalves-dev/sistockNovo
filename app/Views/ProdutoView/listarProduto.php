<p><?php echo anchor('Produto/Produto/create', '>>> Adicionar Produto') ?></p>

<table>
    <tr>
        <th>#</th>
        <th>Marca</th>
        <th>Quantidade</th>
        <th>Preço de Compra</th>
        <th>Preço de Venda</th>
        <th>Ação</th>
    </tr>
    <?php foreach($produtos as $produto):?>
        <tr>
            <td><?php echo $produto['idProduto'];?></td>
            <td><?php echo $produto['marca']; ?></td>
            <td><?php echo $produto['quantidade']; ?></td>
            <td><?php echo $produto['precoCompra']; ?></td>
            <td><?php echo $produto['precoVenda']; ?></td>
            <td>
                <?php echo anchor('Produto/Produto/edit/'.$produto['idProduto'],'Editar') ?>
                
            </td>
        </tr>
        <?php endforeach ?>
</table>