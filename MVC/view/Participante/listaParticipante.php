<?php
 
       if(empty($public)){
        echo"<p>Nenhum participante encontrado</p>";
        echo "<a href='/eventos/MVC/View/Participante/cadastrarParticipante.php'>Cadastrar</a>";
        return;
       }

       echo"<table border='1' cellpading = '5' cellspacing='0'>";
       echo "<tr><td><a href ='view/Participante/cadastrarParticipante.php'>Cadastrar</a></td> <th>PARTICIPANTE</th></tr>";
       echo "<tr> <th>ID</th> <th>Nome</th> <th>E-mail</th> <th>Ações</th> </tr>";

       foreach($participantes as $participante){
        $id = $participante['id'];
        echo "<tr>";
        echo "<td>{$id}</td>";
        echo "<td> {$participante['nome']}</td>";
        echo "<td> {$participante['email']}</td>";
        echo "<td>
           <a href='/eventos/MVC/View/Participante/editarParticipante.php?id=<?=$id?>'>Editar</a> | 
          <a href='/eventos/MVC/View/Participante/deletarParticipante.php?id=<?=$id?>' onclick=\"return confirm('Tem certeza que deseja excluir este usuário?')\">Deletar</a> 
            </td>";
        echo"</tr>";

       }
       echo"</table></br></br>";



?>

<h2>Eventos</h2>

<?php if(empty($eventos)): ?>
    <p>Nenhum evento encontrado</p>
<?php else: ?>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Descrição</th>
</tr>

<?php foreach($eventos as $evento): ?>
<tr>
    <td><?= $evento['id'] ?></td>
    <td><?= $evento['nome'] ?></td>
    <td><?= $evento['descricao'] ?></td>
</tr>
<?php endforeach; ?>

</table>

<?php endif; ?>