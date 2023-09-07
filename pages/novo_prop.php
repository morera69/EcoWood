<h1>Adicionar Cliente</h1>

<?php
require_once 'incluedes/conexao.php';

?>
<form action="actions/prop_save.php" method="post">
    <div>
        <label for="nome">Nome do Cliente</label>
        <input type="text" name="nome" id="nome" required>
    </div>
    <div>
        <label for="endereco">Cidade</label>
        <input type="text" name="cidade" id="cidade" required>
    </div>
    <div>
        <label for="telefone">Telefone</label>
        <input type="text" name="tel" id="tel" required>
    </div>
    <div>
        <input class="save" type="submit" value="Salvar">
    </div>
</form>




<!-- id, nome, email, endereco, municipio_id, telefone -->