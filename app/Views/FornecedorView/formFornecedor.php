<h1>Formulario Fornecedor</h1>
<?php echo form_open('Fornecedor/Fornecedor/store');?>

<p>
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" value="<?php echo isset($fornecedor['nome']) ? $fornecedor['nome'] : ''; ?>">
  
</p>
<p>
    <label for="cnpj">CNPJ</label>
    <input type="text" name="cnpj" id="cnpj" value="<?php echo isset($fornecedor['cnpj']) ? $fornecedor['cnpj'] : ''; ?>">
  
</p>
<p>
<label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?php echo isset($fornecedor['email']) ? $fornecedor['email'] : ''; ?>">
</p>
<p>
<label for="telefone">Telefone:</label>
    <input type="text" name="telefone" id="telefone" value="<?php echo isset($fornecedor['telefone']) ? $fornecedor['telefone'] : ''; ?>">
</p>
<p>
<label for="endereco">Endereço:</label><br>
    
    <textarea name="endereco" id="endereco" cols="30" rows="10"><?php echo isset($fornecedor['endereco']) ? $fornecedor['endereco'] : ''; ?></textarea>
</p>
<p>
    <input type="submit" value="Salvar">
</p>
<input type="hidden" name="idFornecedor" value="<?php echo isset($fornecedor['idFornecedor']) ? $fornecedor['idFornecedor'] : ''; ?>">
</form>