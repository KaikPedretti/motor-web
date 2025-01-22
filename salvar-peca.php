<?php
switch ($_REQUEST["acao-peca"]) {
    case 'cadastrar':
        $peca = $_POST["peca"];
        $marca = $_POST["marca"];
        $utilidade = $_POST["utilidade"];
        $situacao = $_POST["situacao"];

        $sql = "INSERT INTO peca(peca, marca, utilidade, situacao) VALUES 
            ('{$peca}','{$marca}','{$utilidade}','{$situacao}')";

        $res = $conn->query($sql);

        if($res==true) {
            print "<script>alert('Cadastro com sucesso');</script>";
            print "<script>location.href='?page=listar-pc';</script>";
        }else{
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listar-pc';</script>";
        }

        break;

    case 'editar-pc':
        $peca = $_POST["peca"];
        $marca = $_POST["marca"];
        $utilidade = $_POST["utilidade"];
        $situacao = $_POST["situacao"];

        $sql = "UPDATE peca SET
                    peca='{$peca}',
                    marca='{$marca}',
                    utilidade='{$utilidade}',
                    situacao='{$situacao}'
                WHERE
                    id=".$_REQUEST["id"];    

        $res = $conn->query($sql);

        if($res==true) {
            print "<script>alert('Editado com sucesso');</script>";
            print "<script>location.href='?page=listar-pc';</script>";
        }else{
            print "<script>alert('Não foi possível editar');</script>";
            print "<script>location.href='?page=listar-pc';</script>";
        }

        break;
    case 'excluir-pc':
        $sql = "DELETE FROM peca WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if($res==true) {
            print "<script>alert('Excluido com sucesso');</script>";
            print "<script>location.href='?page=listar-pc';</script>";
        }else{
            print "<script>alert('Não foi possível Excluir');</script>";
            print "<script>location.href='?page=listar-pc';</script>";
        }

        break;
}