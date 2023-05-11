<?php
require_once("DB.php");
require_once("Aluno.php");

$db = DB::getConnection();

if(isset($_POST['acao']) &&($_POST['acao'] == 'Cadastrar')){
    $nome = $_POST['nome']??'';
    $sql= "INSERT INTO docker.aluno
    (nome)
    VALUES('$nome');
    ";

    if($db->exec($sql)==1){
    echo "<p>Registro inserido!</p>";
}
    elseif (isset($_GET['excluir'])){
    $id = $_GET['excluir'];
        $sql = "DELETE FROM docker.aluno
        WHERE id=$id;";
        if($db->exec($sql)==1)
        echo "<p>Registro deletado!</p>";
}
}

?>
<form action="" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome">
    <input type="submit" name="Cadastrar" id="acao">

<?php
$sql = 'SELECT id. nome FROM docker.aluno;';

$alunos = $db->query($sql);
$alunos->setFetchMode(PDO::FETCH_ASSOC);

echo "<h1> Toral de alunos: {$alunos->rowCount()}<h1>";

echo "<ul>";

    while($aluno = $alunos->fetch()){
        var_dump($aluno);
        // echo "<li>{{$aluno['id']}: {$aluno['nome']} <li> <a href=\"index.php?excluir={$aluno['id']}\">Deletar</a>\n";
    }
echo "<ul>";

