<?php
    include("../model/link.php");
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        
        $sql = "SELECT * FROM usuarios WHERE usuario = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$usuario]);
        $user = $stmt->fetch();
        
        if ($user && $user['senha'] == $senha) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['nome'] = $user['nome'];
            header('Location: ../view/dashboard.php');
        } else {
            print  "<script>alert('Senha e/ou usuário incorreto(s)!');</script>";
            header('Location: ../index.php');
            
        }
    }
    
?>