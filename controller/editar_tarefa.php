<?php
include_once '../model/link.php';  // Certifique-se de que a conexão está correta
 
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['id']) {
    
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
    $estado = isset($_POST['situacao']) ? $_POST['situacao'] : '';

    if ($id && ($estado === 'pendente' || $estado === 'completa')) {
        $sql="UPDATE tarefas SET situacao = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$estado, $id]);

        if ($stmt->execute()) {
            echo "Estado atualizado com sucesso";
        } else {
            $erroInfo = $stmt->errorInfo();
            echo "Erro ao atualizar o estado: " . $erroInfo[2];
        }
    } else {
        echo "Dados inválidos";
    }
} else {
    echo "Método de requisição inválido";
}