<?php
  include_once "../connect/conexaocasa.php";

$consulta = "SELECT * FROM civis;";

$con = $conn->query($consulta) or die($mysqli->error);

 while ($dado = $con->fetch_array()) { 
  $dado['nome']; 
  $dado['cracha']; 
  $dado['tpdoc'];
  $dado['numdoc'];
  $dado['entrada']; 
  $dado['saida']; 
  $dado['veiculo']; 
  $dado['placa']; 
  $dado['post'];
  $dado['nomeguerra'];
  $dado['destino'];
  $dado['id'];
}
?>