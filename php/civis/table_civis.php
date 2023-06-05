<?php
  include_once "../connect/conexaocasa.php";

if (isset($_POST["cadastrar"])) :
    $nome = $_POST["nome"];
    $cracha = $_POST["cracha"];
    $tpdoc = $_POST["tpdoc"];
    $numdoc = $_POST["numdoc"];
    $entrada = $_POST["entrada"];
    $saida = $_POST["saida"];
    $veiculo = $_POST["veiculo"];
    $placa = $_POST["placa"];
    $post = $_POST["post"];
    $nomeguerra = $_POST["nomeguerra"];
    $destino = $_POST["destino"];

    $stmt = $conn->prepare("INSERT INTO civis
   (nome, cracha, tpdoc, numdoc, entrada, saida, veiculo, placa,post, nomeguerra, destino) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sisssssssss", $nome,  $cracha,$tpdoc, $numdoc, $entrada, $saida, $veiculo, $placa, $post, $nomeguerra, $destino);


    $stmt->execute();
    echo '<script> alert ("Cadastrado com sucesso!"); location.href=("./cadastroCivis.php")</script>';
    $stmt->close();
    $conn->close();

endif;
