<?php
include_once('../model/link.php');


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['tarefaId'])) {
    
    $tarefaId = intval($_POST['tarefaId']);

    $stmt = $conn->prepare("DELETE FROM tarefas WHERE id = :tarefaId");
    $stmt->bindParam(':tarefaId', $tarefaId, PDO::PARAM_INT);

    
    if ($stmt->execute()) {
        echo "success";
    } else {
        
        echo "Erro ao executar a exclusão: ";
        print_r($stmt->errorInfo()); 
    }
} else {
    echo "error: Dados não recebidos corretamente.";
}
?>
