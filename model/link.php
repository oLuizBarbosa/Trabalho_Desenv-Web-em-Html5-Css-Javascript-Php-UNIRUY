<?php
    $HOST = 'localhost'; 
    $BASE = 'syslog';
    $USER = 'root';
    $PASS = '$Ak1nz0la1';

    try {
        $conn = new PDO("mysql:host=$HOST;dbname=$BASE", $USER, $PASS);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch (PDOException $e) {
        
        echo "Erro na conexão: " . $e->getMessage();
    }
?>