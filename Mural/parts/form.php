<?php

require_once "RecadoDAO.php";

if(isset($_GET['alterar'])):
    
    $dados = RecadoDAO::getById($_GET['alterar']);

elseif(isset($_POST['operacao']) && ($_POST['operacao']=='Alterar')):

    RecadoDAO::update($_POST['nome'],$_POST['cidade'],$_POST['recado'],$_POST['email'],$_GET['id']);

elseif(isset($_POST['operacao']) && ($_POST['operacao']=='Cadastrar')):

    RecadoDAO::insert($_POST['nome'],$_POST['cidade'],$_POST['recado'],$_POST['email']);

elseif(isset($_GET['excluir'])):
    
    RecadoDAO::delete($_GET['excluir']); 

endif;
?>
<form action="index.php?id=<?= isset($dados)?$dados->getId():''?>" method="post">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?= isset($dados)?$dados->getNome():'' ?>">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= isset($dados)?$dados->getEmail():'' ?>">
    </div>
    <div class="form-group">
        <label for="cidade">Cidade:</label><br>
            <?php $cidades = isset($dados)? $dados->getCidade(): []; ?>
            <input type="checkbox" name="cidade[]" value="Barbacena" <?= in_array("Barbacena",$cidades)?'checked':''?> >Barbacena<br>
            <input type="checkbox" name="cidade[]" value="Juiz de Fora" <?= in_array("Juiz de Fora",$cidades)?'checked':''?> >Juiz de Fora<br>
            <input type="checkbox" name="cidade[]" value="Matias Barbosa" <?= in_array("Matias Barbosa",$cidades)?'checked':''?> >Matias Barbosa<br>
            <input type="checkbox" name="cidade[]" value="Rio de Janeiro" <?= in_array("Rio de Janeiro",$cidades)?'checked':''?> >Rio de Janeiro<br>
    </div>
    <div class="form-group">
        <label for="recado">Recado:</label>
        <textarea name="recado" id="recado" cols="30" rows="10"><?= isset($dados)?$dados->getRecado():'' ?></textarea>
    </div>    
    <input type="submit" value="<?= isset($dados)?'Alterar':'Cadastrar'?>" name="operacao">
</form>