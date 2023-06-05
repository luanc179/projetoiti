<?php
  include_once "../connect/conexaocasa.php";

if (isset($_POST["cadastrar"])) :
    $post_vis = $_POST["post_vis"];
    $nome = $_POST["nome"];
    $idtmil = $_POST["idtmil"];
    $om = $_POST["om"];
    $entrada = $_POST["entrada"];
    $saida = $_POST["saida"];
    $vtr = $_POST["vtr"];
    $eb_placa = $_POST["eb_placa"];
    $post = $_POST["post"];
    $nomeguerra = $_POST["nomeguerra"];
    $destino = $_POST["destino"];

    $stmt = $conn->prepare("INSERT INTO cadastro.miloom
   (post_vis, nome, idtmil, om, entrada, saida, vtr, eb_placa, post, nomeguerra, destino) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssissssssss", $post_vis, $nome,  $idtmil ,$om, $entrada, $saida, $vtr, $eb_placa, $post, $nomeguerra, $destino);


    $stmt->execute();
    echo '<script> alert ("Cadastrado com sucesso!"); location.href=("./cadastro_milOOM.php")</script>';
    $stmt->close();
    $conn->close();

endif;
