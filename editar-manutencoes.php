<div class="formulario">
<h1>Editar Manutenções</h1>
<?php
    $sql = "SELECT * FROM manutencao WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar-man" class="form-itens"method="POST">
    <input type="hidden" name="acao-man" value="editar-man"/>
    <input type="hidden" name="id" value="<?php print $row->id;?>"/>
    
        <label>Modelo</label>
        <input type="text" name="modelo" value="<?php print $row->modelo;?> "class="form-control" >
   
    
        <label>Marca</label>
        <input type="text" name="marca"  value="<?php print $row->marca;?>" class="form-control">
    
        <label>Ano</label>
        <input type="text" name="ano"  value="<?php print $row->ano;?>"class="form-control">
    
        <label>Defeito</label>
        <input type="text" name="defeito"  value="<?php print $row->defeito;?>"class="form-control">
   
        <button type="submit" class="btn btn-primary">Enviar</button>
   
</form>
</div>