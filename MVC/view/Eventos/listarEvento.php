<?php
 
       if(empty($Eventos)){
        echo"<p>Nenhum participante encontrado</p>";
        echo "<a href ='View/Evento/cadastrarEvento.php'>Cadastrar</a>";
        return;
       }

       echo"<table border='1' cellpading = '5' cellspacing='0'>";
       echo "<tr><td><a href ='View/Evento/cadastrarEvento.php'>Cadastrar</a></td> <th>EVENTOS</th> </tr> ";
       echo "<tr> <th>ID</th> <th>Nome</th> <th>Descrição</th> <th>Horario</th> <th>Local</th> <th>Numero</th> <th>Ações</th> </tr>";

       foreach($Eventos as $Evento){
        $id = $Evento['id'];
        echo "<tr>";
        echo "<td>{$id}</td>";
        echo "<td> {$Evento['nome']}</td>";
        echo "<td> {$Evento['descricao']}</td>";
        echo "<td> {$Evento['horario']}</td>";
        echo "<td> {$Evento['local']}</td>";
        echo "<td> {$Evento['numero']}</td>";
        
        echo "<td>
            <a href = 'View/Evento/editarEvento.php?id={$id}'>Editar</a> | 
            <a href = 'View/Evento/deletarEvento.php?id={$id}' onclick=\"return confirm('Tem certeza que deseja excluir este usuário?')\">Deletar</a> 
            </td>";
        echo"</tr>";

       }
       echo"</table></br></br>";


?>