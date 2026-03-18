<?php
 
       if(empty($pagamentos)){
        echo"<p>Nenhum usuario encontrado</p>";
        echo "<a href ='View/Pagamento/cadastrarPagamento.php'>Cadastrar</a>";
        return;
       }

       echo"<table border='1' cellpading = '5' cellspacing='0'>";
       echo "<tr><td><a href ='View/Pagamento/cadastrarPagamento.php'>Cadastrar</a></td> <th>PAGAMENTO</th> </tr> ";
       echo "<tr> <th>ID</th> <th>Nome</th> <th>Tipo</th>> <th>Ações</th> </tr>";

       foreach($pagamentos as $pagamento){
        $id = $pagamento['id'];
        echo "<tr>";
        echo "<td>{$id}</td>";
        echo "<td> {$pagamento['nome']}</td>";
        echo "<td> {$pagamento['tipo']}</td>";

        echo "<td>
            <a href = 'View/Pagamento/editarPagamento.php?id={$id}'>Editar</a> | 
            <a href = 'View/Pagamento/deletarPagamento.php?id={$id}' onclick=\"return confirm('Tem certeza que deseja excluir este usuário?')\">Deletar</a> 
            </td>";
        echo"</tr>";

       }
       echo"</table>";


?>