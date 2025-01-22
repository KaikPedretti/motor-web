<?php
switch ($_REQUEST["acao-man"]) {
    case 'cadastrar':
        $modelo = $_POST["modelo"];
        $marca = $_POST["marca"];
        $ano = $_POST["ano"];
        $defeito = $_POST["defeito"];

        $sql = "INSERT INTO manutencao(modelo, marca, ano, defeito) VALUES 
            ('{$modelo}','{$marca}','{$ano}','{$defeito}')";

        $res = $conn->query($sql);

        if($res==true) {
            print "<script>alert('Cadastro com sucesso');</script>";
            print "<script>location.href='?page=listar-man';</script>";
        }else{
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listar-man';</script>";
        }

        break;

    case 'editar-man':
        $modelo = $_POST["modelo"];
        $marca = $_POST["marca"];
        $ano = $_POST["ano"];
        $defeito = $_POST["defeito"];


        $sql = "UPDATE manutencao SET
                    modelo='{$modelo}',
                    marca='{$marca}',
                    ano='{$ano}',
                    defeito='{$defeito}'
                WHERE
                    id=".$_REQUEST["id"];    

        $res = $conn->query($sql);

        if($res==true) {
            print "<script>alert('Editado com sucesso');</script>";
            print "<script>location.href='?page=listar-man';</script>";
        }else{
            print "<script>alert('Não foi possível editar');</script>";
            print "<script>location.href='?page=listar-man';</script>";
        }

        break;
    case 'excluir-man':
        $sql = "DELETE FROM manutencao WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if($res==true) {
            print "<script>alert('Excluido com sucesso');</script>";
            print "<script>location.href='?page=listar-man';</script>";
        }else{
            print "<script>alert('Não foi possível Excluir');</script>";
            print "<script>location.href='?page=listar-man';</script>";
        }

        break;
}