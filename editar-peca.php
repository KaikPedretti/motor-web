<div class="formulario">
<h1>Editar Peças</h1>
<?php
    $sql = "SELECT * FROM peca WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar-peca" class="form-itens"method="POST">
    <input type="hidden" name="acao-peca" value="editar-pc"/>
    <input type="hidden" name="id" value="<?php print $row->id;?>"/>
    
        <label>Peça</label>
        <input type="text" name="peca" value="<?php print $row->peca;?> "class="form-control" >
    
        <label>Marca</label>
        <input type="text" name="marca"  value="<?php print $row->marca;?>" class="form-control">
   
        <label>Utilidade</label>
        <input type="text" name="utilidade"  value="<?php print $row->utilidade;?>"class="form-control">
    
        <label>Situação</label>
        <input type="text" name="situacao"  value="<?php print $row->situacao;?>"class="form-control">
  
        <button type="submit" class="btn btn-primary">Enviar</button>
    
</form>