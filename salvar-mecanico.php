<?php
switch ($_REQUEST["acao-mc"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $especializacao = $_POST["especializacao"];

        $sql = "INSERT INTO mecanico(nome, email, telefone, especializacao) VALUES 
            ('{$nome}','{$email}','{$telefone}','{$especializacao}')";

        $res = $conn->query($sql);

        if($res==true) {
            print "<script>alert('Cadastro com sucesso');</script>";
            print "<script>location.href='?page=listar-mc';</script>";
        }else{
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listar-mc';</script>";
        }

        break;

    case 'editar-mc':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $especializacao = $_POST["especializacao"];


        $sql = "UPDATE mecanico SET
                    nome='{$nome}',
                    email='{$email}',
                    telefone='{$telefone}',
                    especializacao='{$especializacao}'
                WHERE
                    id=".$_REQUEST["id"];    

        $res = $conn->query($sql);

        if($res==true) {
            print "<script>alert('Editado com sucesso');</script>";
            print "<script>location.href='?page=listar-mc';</script>";
        }else{
            print "<script>alert('Não foi possível editar');</script>";
            print "<script>location.href='?page=listar-mc';</script>";
        }

        break;
    case 'excluir-mc':
        $sql = "DELETE FROM mecanico WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if($res==true) {
            print "<script>alert('Excluido com sucesso');</script>";
            print "<script>location.href='?page=listar-mc';</script>";
        }else{
            print "<script>alert('Não foi possível Excluir');</script>";
            print "<script>location.href='?page=listar-mc';</script>";
        }

        break;
}