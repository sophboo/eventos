<?php

require_once "C:/Turma2/xampp/htdocs/eventos/MVC/DB/database.php";
require_once "C:/Turma2/xampp/htdocs/eventos/MVC/controller/ParticipanteController.php";

$ParticipanteController = new ParticipanteController($pdo);

// 👉 PEGAR DADOS DO PARTICIPANTE
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $Participante = $ParticipanteController->buscarParticipante($id);
}else{
    header('Location: ../../index.php');
    exit;
}

?>

<!DOCTYPE html>
<html>
<body>

<form method="post">

    <input type="text" name="nome" value="<?=$Participante['nome'];?>" required><br><br>

    <input type="text" name="telefone" value="<?=$Participante['telefone'];?>" required><br><br>

    <input type="email" name="email" value="<?=$Participante['email'];?>" required><br><br>

    <input type="password" name="senha" value="<?=$Participante['senha'];?>" required><br><br>

    <input type="submit">

</form>

</body>
</html>

<?php



if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $ParticipanteController->editarParticipante($nome, $telefone, $email, $senha, $id);

    header('Location: ../../index.php');
    exit;
}

?>
