<?php
include("../model/link.php");
session_start(); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $nome_lista = $_POST['nome_lista'];
    $id_usuario = $_POST['id_usuario'];

    try {
        $sql = "INSERT INTO lista_tarefas (nome,data_criacao,id_usuario) VALUES (?,CURDATE(), ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$nome_lista, $id_usuario]);
        
    } catch (PDOException $e) {
        echo "Erro ao inserir a lista: " . $e->getMessage();
    }
    
}

