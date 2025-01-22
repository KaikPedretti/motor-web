<div class="formulario">
<h1>Editar Mecânicos</h1>
<?php
    $sql = "SELECT * FROM mecanico WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar-mc" class="form-itens"method="POST">
    <input type="hidden" name="acao-mc" value="editar-mc"/>
    <input type="hidden" name="id" value="<?php print $row->id;?>"/>
    
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome;?> "class="form-control" >
    
        <label>Email</label>
        <input type="email" name="email"  value="<?php print $row->email;?>" class="form-control">
    
        <label>Telefone</label>
        <input type="tel" name="telefone"  value="<?php print $row->telefone;?>"class="form-control">
    
        <label>Especializaçâo</label>
        <input type="text" name="especializacao"  value="<?php print $row->especializacao;?>"class="form-control">
    
        <button type="submit" class="btn btn-primary">Enviar</button>
    
</form>
</div>