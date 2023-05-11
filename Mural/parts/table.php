<?php
    require_once "RecadoDAO.php";

    if($result = RecadoDAO::getAll()):
?>
    <table border=1>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Cidade</th>
                <th>Recado</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while ($recado = $result->fetch_object('RecadoDAO')):
            ?>
                <tr>
                    <td><?= $recado->getId() ?></td>
                    <td><?= $recado->getNome() ?></td>
                    <td><?= $recado->getEmail() ?></td>
                    <td><?= print_r($recado->getCidade()) ?></td>
                    <td><?= $recado->getRecado() ?></td>
                    <td><a href="index.php?excluir=<?= $recado->getId() ?>">Deletar</a></td>
                    <td><a href="index.php?alterar=<?= $recado->getId() ?>">Alterar</a></td>
                </tr>
            <?php
            endwhile;
            ?>
        </tbody>
    </table>

<?php
    endif;
?>