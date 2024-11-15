<?php
include_once('../model/link.php');


if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST['id_lista']) {
    
    $id_lista =$_POST['id_lista'];
    $sql = "DELETE FROM lista_tarefas WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id_lista]);
    
    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "Erro ao executar a exclusão de lista: ";
        print_r($stmt->errorInfo()); 
    }
} else {
    echo "error: Dados não recebidos corretamente.";
}
?>