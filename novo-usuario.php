<div class="formulario">
<h1>Novo Usuário</h1>
<form action="?page=salvar" class="form-itens" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    
        <label >Nome</label>
        <input type="text" name="nome" class="form-control"><br/>
     
    
        <label >E-mail</label>
        <input type="email" name="email" class="form-control"><br/>
    
    
        <label >Senha</label>
        <input type="password" name="senha" class="form-control"><br/>
    
    
        <label >Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control"><br/>
      
    
        <button type="submit"  class="form-control">Enviar</button>
    
</form>
<div>