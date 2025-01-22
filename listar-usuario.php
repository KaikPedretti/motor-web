
<?php
    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<table class='table'>";
        print "<tr class='tr'>";
            print "<th class='th'>#</th>";
            print "<th class='th'>Nome</th>";
            print "<th class='th'>Email</th>";
            print "<th class='th'>Data de Nascimento</th>";
            print "<th class='th'>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td class='td'>". $row->id."</td>";
            print "<td class='td'>".$row->nome."</td>";
            print "<td class='td'>".$row->email."</td>";
            print "<td class='td'>".$row->data_nasc."</td>";
            print "<td class='td'>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\"class='btn btn-success'>Editar</button>

                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false}\"class='btn btn-danger'>Excluir</button>
                   </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não encontrou resultados</p>";
    }
?>