<h1>Formulario Funcionario</h1>
<?php echo form_open('Funcionario/Funcionario/store');?>

<p>
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" value="<?php echo isset($funcionario['nome']) ? $funcionario['nome'] : ''; ?>">
  
</p>
<p>
    <label for="cpf">CPF:</label>
    <input type="text" name="cpf" id="cpf" value="<?php echo isset($funcionario['cpf']) ? $funcionario['cpf'] : ''; ?>">
  
</p>

<p>
<label for="telefone">Telefone:</label>
    <input type="text" name="telefone" id="telefone" value="<?php echo isset($funcionario['telefone']) ? $funcionario['telefone'] : ''; ?>">
</p>
<p>
<label for="endereco">Endereço:</label><br>
    
    <textarea name="endereco" id="endereco" cols="30" rows="10"><?php echo isset($funcionario['endereco']) ? $funcionario['endereco'] : ''; ?></textarea>
</p>
<p>
    <label for="tipo">Funcionario:</label>
<select name="tipo" id="tipo">
  <option value="0">Administrador</option>
  <option value="1">Vendedor</option>
</select>

</p>
<p>
<label for="salario">Salario:</label>
    <input type="salario" name="salario" id="salario" value="<?php echo isset($funcionario['salario']) ? $funcionario['salario'] : ''; ?>">
</p>
<label for="login">Login:</label>
    <input type="login" name="login" id="login" value="<?php echo isset($funcionario['login']) ? $funcionario['login'] : ''; ?>">
</p>
<label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha" value="<?php echo isset($funcionario['senha']) ? $funcionario['senha'] : ''; ?>">
</p>
<p>
    <input type="submit" value="Salvar">
</p>
<input type="hidden" name="idFuncionario" value="<?php echo isset($funcionario['idFuncionario']) ? $funcionario['idFuncionario'] : ''; ?>">
</form>