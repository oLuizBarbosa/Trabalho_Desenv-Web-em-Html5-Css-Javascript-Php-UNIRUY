<?php
session_start();
//SE NÃO ESTIVER LOGADO...
if(empty($_SESSION)){
    header('Location: ../index.php');
}
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="..\style\dashboard\dashstyle.css">
</head>
<body>
    <nav class="barra-topo">
            <?php
                print"<h3>Olá, ".$_SESSION['nome']."</h3>";
                print "<div>
                        <a href='../controller/logout.php' class='btn btn-danger'>Sair</a>
                        </div>";
            ?>
    </nav>

    <div class="card-listas">
        <?php
        include("../view/exibirConteudo.php");
        ?>
    </div>
    <script src="..\controller\js\excluir_lista.js"></script>
    <script src="..\controller\js\criar_lista.js"></script>
    <script src="..\controller\js\excluir.js"></script>
    <script src="..\controller\js\menu.js"></script>
    <script src="..\controller\js\mudar_lista.js"></script>
    <script src="..\controller\js\checkbtn.js"></script>
    <script src="..\controller\js\criar_tarefa.js"></script>
    
</body>

