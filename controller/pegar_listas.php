<?php
include("../model/link.php");
$user_id = $_SESSION['user_id']; 

// Consulta para buscar as listas de tarefas do usuário
$sql = "SELECT * FROM lista_tarefas WHERE id_usuario = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$user_id]);
$listas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>