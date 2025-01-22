<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Motorweb</title>
    <link href="estilizacao.css" rel="stylesheet">
    
</head>

<body>
    <header class="cabeçalho">
         <p>Oficina Motorweb</p>
    </header>
        <div class="nav-left">
                <ul>
                    <li class="nav-list">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li><br/>
                    <li class="nav-list" >
                        <a class="nav-link" href="?page=novo">Novo Usuário</a>
                    </li><br/>
                    <li class="nav-list">
                        <a class="nav-link" href="?page=nova-pc"> Nova Peça</a>
                    </li><br/>
                    <li class="nav-list">
                        <a class="nav-link" href="?page=novo-mc">Novo Mecânico </a>
                    </li><br/>
                    <li class="nav-list">
                        <a class="nav-link" href="?page=novo-aux">Novo auxiliar</a>
                    </li><br/>
                    <li class="nav-list">
                        <a class="nav-link" href="?page=novo-man"> Nova Manutenção </a>
                    </li><br/>
                    <li class="nav-list">
                        <a class="nav-link" href="?page=listar">Listar Usuários</a>
                    </li><br/>
                    <li class="nav-list">
                        <a class="nav-link" href="?page=listar-pc">Listar Peças</a>
                    </li><br/>
                    <li class="nav-list">
                        <a class="nav-link" href="?page=listar-mc">Listar Mecânicos</a>
                    </li><br/>
                    <li class="nav-list">
                        <a class="nav-link" href="?page=listar-aux">Listar Auxiliares</a>
                    </li><br/>
                    <li class="nav-list">
                        <a class="nav-link" href="?page=listar-man">Listar Manutenções</a>
                    </li>
                </ul>
            </div>
            
    

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                include("config.php");
                switch (@$_REQUEST["page"]) {
                    case "novo":
                        include("novo-usuario.php");
                        break;
                    case "nova-pc":
                        include("nova-peca.php");
                        break;
                    case "novo-mc":
                        include("novo-mecanico.php");
                        break;
                    case "novo-aux":
                        include("novo-auxiliar.php");
                        break;
                        case "novo-man":
                            include("nova-manutencao.php");
                            break;
                    case "listar":
                        include("listar-usuario.php");
                        break;
                    case "listar-pc":
                        include("listar-peca.php");
                        break;
                    case "listar-mc":
                        include("listar-mecanico.php");
                        break;
                    case "listar-aux":
                        include("listar-auxiliar.php");
                        break;
                        case "listar-man":
                            include("listar-manutencao.php");
                            break;
                    case "salvar":
                        include("salvar-usuario.php");
                        break;
                    case "salvar-peca":
                        include("salvar-peca.php");
                        break;
                    case "salvar-mc":
                        include("salvar-mecanico.php");
                        break;
                    case "salvar-aux":
                        include("salvar-auxiliar.php");
                        break;
                        case "salvar-man":
                            include("salvar-manutencoes.php");
                            break;
                    case "editar":
                        include("editar-usuario.php");
                        break;
                    case "editar-pc":
                        include("editar-peca.php");
                        break;
                    case "editar-mc":
                        include("editar-mecanicos.php");
                        break;
                    case "editar-aux":
                        include("editar-auxiliar.php");
                        break;
                        case "editar-man":
                            include("editar-manutencoes.php");
                            break;
                    
                }
                ?>
            </div>
        </div>
    </div>

    
    </script>
</body>

</html>