<div class="formulario">
<h1>Editar Usuário</h1>
<?php
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" class="form-itens" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php 
    print $row->id; ?>">
   
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>"class="form-control">
    
        <label>E-mail</label>
        <input type="email" name="email" value="<?php print $row->email; ?>"class="form-control">
    
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" required>
  
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" value="<?php print $row->data_nasc; ?>"class="form-control">
    
        <button type="submit" class="btn btn-primary">Enviar</button>
    
</form>
</div>