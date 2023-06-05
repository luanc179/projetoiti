<?php
include_once "../connect/conexaocasa.php";

$consulta = "SELECT * FROM cadastro.miloom;";

$con = $conn->query($consulta) or die($mysqli->error);

 while ($dado = $con->fetch_array()) { 
  $dado['post_vis']; 
  $dado['nome']; 
  $dado['idtmil']; 
  $dado['om'];
  $dado['entrada']; 
  $dado['saida']; 
  $dado['vtr']; 
  $dado['eb_placa']; 
  $dado['post'];
  $dado['nomeguerra'];
  $dado['destino'];
  $dado['id'];
}
?>