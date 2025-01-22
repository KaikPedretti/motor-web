
<?php
    $sql = "SELECT * FROM mecanico";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<table class='table'>";
        print "<tr>";
            print "<th class='th'>#</th>";
            print "<th class='th'>Nome</th>";
            print "<th class='th'>Email</th>";
            print "<th class='th'>Telefone</th>";
            print "<th class='th'>Especialização</th>";
            print "<th class='th'>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td class='td'>". $row->id."</td>";
            print "<td class='td'>".$row->nome."</td>";
            print "<td class='td'>".$row->email."</td>";
            print "<td class='td'>".$row->telefone."</td>";
            print "<td class='td'>".$row->especializacao."</td>";
            print "<td class='td'>
                    <button onclick=\"location.href='?page=editar-mc&id=".$row->id."';\"class='btn btn-success'>Editar</button>

                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-mc&acao-mc=excluir-mc&id=".$row->id."';}else{false}\"class='btn btn-danger'>Excluir</button>
                   </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não encontrou resultados</p>";
    }
?>