<div class="formulario">
<h1>Nova Peça</h1>
<form action="?page=salvar-peca" class="form-itens" method="POST">
    <input type="hidden" name="acao-peca" value="cadastrar" />
    
        <label>Peça</label>
        <input type="text" name="peca" class="form-control">
  
        <label>Marca</label>
        <input type="text" name="marca" class="form-control">
    
        <label>Utilidade</label>
        <input type="text" name="utilidade" class="form-control">
   
        <label>Situação</label>
        <input type="text" name="situacao" class="form-control">
   
        <button type="submit" class="btn btn-primary">Enviar</button>
  
</form>
</div>