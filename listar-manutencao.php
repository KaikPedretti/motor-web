
<?php
    $sql = "SELECT * FROM manutencao";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<table class='table'>";
        print "<tr>";
            print "<th class='th'>#</th>";
            print "<th class='th'>Modelo</th>";
            print "<th class='th'>Marca</th>";
            print "<th class='th'>Ano</th>";
            print "<th class='th'>Defeito</th>";
            print "<th class='th'>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td class='td'>". $row->id."</td>";
            print "<td class='td'>".$row->modelo."</td>";
            print "<td class='td'>".$row->marca."</td>";
            print "<td class='td'>".$row->ano."</td>";
            print "<td class='td'>".$row->defeito."</td>";
            print "<td class='td'>
                    <button onclick=\"location.href='?page=editar-man&id=".$row->id."';\"class='btn btn-success'>Editar</button>

                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-man&acao-man=excluir-man&id=".$row->id."';}else{false}\"class='btn btn-danger'>Excluir</button>
                   </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não encontrou resultados</p>";
    }
?>