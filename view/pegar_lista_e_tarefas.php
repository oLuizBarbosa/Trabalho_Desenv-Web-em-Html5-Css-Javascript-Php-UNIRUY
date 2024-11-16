<?php

    include_once '../model/link.php';

    $id_lista = $_GET['id'];
    $_SESSION['id_lista'] = $id_lista;

    

    if ($id_lista > 0) {
        
        $stmt = $conn->prepare("SELECT id,nome, descricao, data_criacao, data_conclusao, situacao, id_lista_tarefa FROM tarefas WHERE id_lista_tarefa = ?");
        $stmt->execute([$id_lista]);
        $tarefas = $stmt->fetchAll();
        print "<div class='menu-overlay' id='menu'>
            <button class='close-btn' onclick='fecharMenu()'>×</button>
            <h3>Criar Tarefa</h3>
            <ul>
            <div id = 'formTarefa'>
                <div class='div-forms'>
                <li><input class='form-control' type='text' placeholder='Nome' name='nome_tarefa' id='nome_tarefa' required></li>
                <li><textarea class='form-control' placeholder='Descrição' name='descricao_tarefa' id='descricao_tarefa' required></textarea></li>
                <li><input class='form-control' type='date' placeholder='Data final' name='data_final' id='data_final' required></li>
                <button class='conf-btn' onclick='criarTarefa(".$id_lista.")'>Confirmar</button>
                </div>
            </ul>
            </div>
            </div>";
        
        print "<div class='barra-tarefas'>
        <h2 style='text-align: center; max-height: 30%; font-weight:bold; font-size:23px'>Minhas Tarefas</h2>
        <button class='open-btn' onclick= 'abrirMenu()'>🖊 Nova Tarefa</button>";
        
        if ($tarefas) {
            include "../controller/pegar_nome_lista.php";
                print"<div class='listas-de-tarefas'>";
            //NOME DA LISTA ATUAL
            print "<h2>".$lista[0]['nome']."</h2>";
            //PERCORRER E MOSTRAR CADA TAREFA
            foreach ($tarefas as $tarefa) {
                print "<div class='card-tarefa' id='tarefa-".$tarefa['id']."' style='margin-bottom: 2em'>";
                print "<strong><h2>" 
                    .$tarefa['nome'] ."</h2></strong> " .$tarefa['descricao'] . 
                    "<br>"."</br>".
                    "<ul <li>".'🗓️ Data de criação: '.$tarefa['data_criacao']. "</li>". 
                    "<li>".'🗓️ Data estimada para conclusão: '.$tarefa['data_conclusao'] ."</li> </ul>". 
                    "<div class='col'><button class='btn btn-danger' onclick='excluirTarefa(" . $tarefa['id'] . "," . $tarefa['id_lista_tarefa'] . ")'>Excluir Tarefa</button> 
                    <button class='checkbtn' onclick='checkIcon(" . $tarefa['id'] . ",\"" . $tarefa['situacao'] . "\")' id='check-" . $tarefa['id'] . "'>";
                    if($tarefa['situacao']=='pendente'){
                        print "⬜";
                    }else{
                        print"✅";
                    }
                    
                    print"</button> </div></div>";
            } 
        } else {
            print "<p>Nenhuma tarefa encontrada para esta lista.</p>";
            
        }
    } else {
        print "<p>Lista de tarefas não encontrada.</p>";  
    }
        print"</div>";