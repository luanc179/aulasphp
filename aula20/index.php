<?php
require_once("DB.php");

$db = DB::getConnection();

if(isset($_POST['acao']) &&($_POST['acao'] == 'Cadastrar')):
    $nome = $_POST['nome']??'';
    $sql= "INSERT INTO docker.aluno
    (nome)
    VALUES('$nome');
    ";
    if($db-exec($sql)==1)
    echo "<p>Registro inserido!</p>";
endif;

?>


<form action="" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome">
    <input type="submit" name="Cadastrar" id="acao">

<?php
$sql = 'SELECT id. nome FROM docker.aluno;';

$alunos = $db-query($sql);

echo "<h1> Toral de alunos: {$alunos->rowCount()}<h1>";

echo "<ul>";

    while($aluno = $alunos-fetch()){
        echo "<li>{{$aluno['id']}: {$aluno['nome']} <li>\n";
    }
echo "<ul>";

?>