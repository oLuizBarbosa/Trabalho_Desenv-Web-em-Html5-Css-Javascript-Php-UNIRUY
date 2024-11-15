<body>
    <div class="dashboard">
        <?php
        print("<div class='conteudo-principal' id='conteudo-principal'>
            <h2>Aqui estarão suas tarefas</h2>
            <p>Selecione uma lista de tarefas</p>
            <div id='menu'></div>
            </div>")
            
        ?>
    
    

        <div class="barra-lateral">
                <h2 style="text-align: center; max-height: 100%;">Minhas Listas</h2>
                <div class="listas-de-tarefa">
                    <?php
                        print"<div class='menu-overlay' id='menuCriarLista' style='height: 15em;'>
                        <button class='close-btn' onclick='fecharMenuLista()'>×</button>
                        <h3>CRIAR NOVA LISTA</h3>
                        <ul>
                        <div id = 'formLista'>
                            <div class='div-forms'>
                            <li><input class='form-control' type='text' placeholder='Nome' name='nome_lista' id='nome_lista' required></li>
                            <button class='conf-btn' onclick='criarLista(".$_SESSION['user_id'].")'>Confirmar</button>
                            </div>
                        </ul>
                        </div>";
                        include("../controller/pegar_listas.php");
                        foreach($listas as $lista){
                            print "<div class='row align-items-center' id='lista-".$lista['id']."'><button href='#' class='card-lista col-sm-8' onclick='carregarConteudo(" .$lista['id'].")'>" .$lista['nome']. "</button><button class='btn btn-danger col-sm-2 h-73' onclick='excluirLista(".$lista['id'].")'>🗑️</button></div>";
                        }    
                    ?>

                </div>
                <button class="card-lista" onclick="abrirMenuLista()">Criar Nova Lista</button>
        </div>
        </div>
    </div>
    
</body>
