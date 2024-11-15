<?php
include("..\model\link.php");
$id_lista = $_SESSION['id_lista'];


// TRAZER O NOME DA LISTA ATUAL
$sql = "SELECT * FROM lista_tarefas WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id_lista]);
$lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
