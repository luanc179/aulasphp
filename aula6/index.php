<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
</head>
<body>
    
<table border="1">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Senha</th>
        <th>Sexo</th>
        <th>Receber e-mail</th>
    </tr>
<?php
        foreach ($dados as $item):

?>
<tr>
    <td><?= $item[1] ?></td>
    <td><?= $item[2] ?></td>
    <td><?= $item[3] ?></td>
    <td><?= $item[4] ?></td>
    <td><?= $item[5] ?></td>
</tr>
<?php
    endforeach;
?>

</table>


</body>
</html>
<?php


$dados = array(
    array(0,"João","joao@i.br","123456",'m',1),
    array(1,"Maria","maria@i.br","654321",'f',1),
    array(2,"Gabriela","gabriela@i.br","password",'f',1),
    array(3,"Kurt","kurt@i.br","teensprit",'m',0),
    array(4,"James","james@i.br","seekanddestroy",'m',0)
);






?>