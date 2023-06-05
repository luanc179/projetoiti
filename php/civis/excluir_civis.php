<?php
include_once "../connect/conexaocasa.php";
include_once "table_civis.php";

if(isset($_GET["excluir"])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM civis WHERE id = ?");
    if(!$stmt) {
        die('Erro no statement: ' . htmlspecialchars($conn->error));
    }
    $stmt->bind_param("i", $id);
    
    $stmt->execute();
    echo '<script> alert ("Excluido com sucesso!"); location.href=("./cadastroCivis.php")</script>';
    $stmt->close();
    $conn->close();


}