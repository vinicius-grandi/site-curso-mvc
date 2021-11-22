<form action="<?php echo DIRPAGE."cadastro/cadastrar"; ?>" name="FormCadastro" id="FormCadastro" method="POST">
    <p>Nome: <input type="text" name="Nome" id="Nome"></p>
    <p>Sexo: <select name="Sexo" id="Sexo">
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
    </select></p>
    <p>Cidade: <input type="text" name="Cidade" id="Cidade"></p>
    <input type="submit" value="Cadastrar">
</form>

<h2>Seleção de Dados</h2>
<form action="<?php echo DIRPAGE."cadastro/seleciona"; ?>" name="FormSelect" id="FormSelect" method="POST">
    <p>Nome: <input type="text" name="Nome" id="Nome"></p>
    <p>Sexo: <select name="Sexo" id="Sexo">
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
    </select></p>
    <p>Cidade: <input type="text" name="Cidade" id="Cidade"></p>
    <input type="submit" value="Pesquisar">
</form>
