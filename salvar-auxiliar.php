<?php
switch ($_REQUEST["acao-aux"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $curso = $_POST["curso"];

        $sql = "INSERT INTO auxiliar(nome, email, telefone, curso) VALUES 
            ('{$nome}','{$email}','{$telefone}','{$curso}')";

        $res = $conn->query($sql);

        if($res==true) {
            print "<script>alert('Cadastro com sucesso');</script>";
            print "<script>location.href='?page=listar-aux';</script>";
        }else{
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listar-aux';</script>";
        }

        break;

    case 'editar-aux':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $curso = $_POST["curso"];


        $sql = "UPDATE auxiliar SET
                    nome='{$nome}',
                    email='{$email}',
                    telefone='{$telefone}',
                    curso='{$curso}'
                WHERE
                    id=".$_REQUEST["id"];    

        $res = $conn->query($sql);

        if($res==true) {
            print "<script>alert('Editado com sucesso');</script>";
            print "<script>location.href='?page=listar-aux';</script>";
        }else{
            print "<script>alert('Não foi possível editar');</script>";
            print "<script>location.href='?page=listar-aux';</script>";
        }

        break;
    case 'excluir-aux':
        $sql = "DELETE FROM auxiliar WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if($res==true) {
            print "<script>alert('Excluido com sucesso');</script>";
            print "<script>location.href='?page=listar-aux';</script>";
        }else{
            print "<script>alert('Não foi possível Excluir');</script>";
            print "<script>location.href='?page=listar-aux';</script>";
        }

        break;
}