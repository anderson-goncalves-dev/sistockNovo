<h1>Formulario Produto</h1>
<?php echo form_open('Produto/Produto/store');?>

<p>
    <label for="marca">Marca:</label>
    <input type="text" name="marca" id="marca" value="<?php echo isset($produto['marca']) ? $produto['marca'] : ''; ?>">
  
</p>
<p>
    <label for="quantidade">Quantidade:</label>
    <input type="text" name="quantidade" id="quantidade" value="<?php echo isset($produto['quantidade']) ? $produto['quantidade'] : ''; ?>">
  
</p>
<p>
<label for="precoCompra">Preço de Compra:</label>
    <input type="text" name="precoCompra" id="precoCompra" value="<?php echo isset($produto['precoCompra']) ? $produto['precoCompra'] : ''; ?>">
</p>
<label for="precoVenda">Preço de Venda:</label>
    <input type="text" name="precoVenda" id="precoVenda" value="<?php echo isset($produto['precoVenda']) ? $produto['precoVenda'] : ''; ?>">
</p>

<p>
    <input type="submit" value="Salvar">
</p>
<input type="hidden" name="idProduto" value="<?php echo isset($produto['idProduto']) ? $produto['idProduto'] : ''; ?>">
</form>