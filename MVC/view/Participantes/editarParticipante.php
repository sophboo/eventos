<?php

require_once "C:/Turma2/xampp/htdocs/eventos/MVC/DB/database.php";
require_once "C:/Turma2/xampp/htdocs/eventos/MVC/controller/ParticipanteController.php";

$ParticipanteController = new ParticipanteController($pdo);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $participante = $ParticipanteController->buscarParticipante($id);

    if(!$participante){
        header('Location: ../../../public/index.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
</head>
<body>
    <form method="post">

       <input type="hidden" name="id" value="<?=$id;?>">

       <label for="nome">Nome:</label>
       <input type="text" name="nome" value="<?=$participante['nome'];?>" required><br> 
       
       <label for="telefone">Telefone:</label>
       <input type="text" name="telefone" value="<?=$participante['telefone'];?>" required><br> 

       <label for="email">E-mail:</label>
       <input type="text" name="email" value="<?=$participante['email'];?>" required><br> 
      

       <input type="submit">
    </form>
</body>
</html>
<?php
} else {
    header('Location: ../../../public/index.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $ParticipanteController->editar($nome, $telefone, $email, $id);

    header('Location: ../../../public/index.php');
}

?>
