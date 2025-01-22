<div class="formulario">
<h1>Editar Auxiliares</h1>
<?php
    $sql = "SELECT * FROM auxiliar WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar-aux" class="form-itens"method="POST">
    <input type="hidden" name="acao-aux" value="editar-aux"/>
    <input type="hidden" name="id" value="<?php print $row->id;?>"/>
    
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome;?> "class="form-control" >
    
        <label>Email</label>
        <input type="email" name="email"  value="<?php print $row->email;?>" class="form-control">
    
        <label>Telefone</label>
        <input type="tel" name="telefone"  value="<?php print $row->telefone;?>"class="form-control">
    
        <label>Curso</label>
        <input type="text" name="curso"  value="<?php print $row->curso;?>"class="form-control">
   
        <button type="submit" class="btn btn-primary">Enviar</button>
    
</form>
</div>