<h1>Formulario Cliente</h1>
<?php echo form_open('Cliente/Cliente/store');?>

<p>
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" value="<?php echo isset($cliente['nome']) ? $cliente['nome'] : ''; ?>">
  
</p>
<p>
    <label for="cpf">CPF:</label>
    <input type="text" name="cpf" id="cpf" value="<?php echo isset($cliente['cpf']) ? $cliente['cpf'] : ''; ?>">
  
</p>
<p>
<label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?php echo isset($cliente['email']) ? $cliente['email'] : ''; ?>">
</p>
<p>
<label for="telefone">Telefone:</label>
    <input type="text" name="telefone" id="telefone" value="<?php echo isset($cliente['telefone']) ? $cliente['telefone'] : ''; ?>">
</p>
<p>
<label for="endereco">Endereço:</label><br>
<textarea name="endereco" id="endereco" cols="30" rows="10"><?php echo isset($fornecedor['endereco']) ? $fornecedor['endereco'] : ''; ?></textarea>
</p>
<p>
    <input type="submit" value="Salvar">
</p>
<input type="hidden" name="idCliente" value="<?php echo isset($cliente['idCliente']) ? $cliente['idCliente'] : ''; ?>">
</form>