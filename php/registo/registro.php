<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>REGISTRO</title>
</head>
<body>
<?php
  include_once "../connect/conexaocasa.php";
    $consulta = "SELECT * FROM civis;";

    $con = $conn->query($consulta) or die($mysqli->error);

    ?>
   <div>
     <table border="1">
       <h2 id="tabela-dados">REGISTRO DE CIVIS</h2>
       <tr>
         <td>Nome completo</td>
         <td>Cracha</td>
         <td>Tipo de documento</td>
         <td>Numero de documento</td>
         <td>Entrada</td>
         <td>Saída</td>
         <td>Veículo</td>
         <td>Falar com</td>
         <td>Destino</td>
       </tr>
       <?php while ($dado = $con->fetch_array()) { ?>
         <tr>
           <td><?php echo $dado['nome']; ?></td>
           <td><?php echo $dado['cracha']; ?></td>
           <td><?php echo $dado['tpdoc']; ?></td>
           <td><?php echo $dado['numdoc']; ?></td>
           <td><?php echo $dado['entrada']; ?></td>
           <td><?php echo $dado['saida']; ?></td>
           <td><?php echo $dado['veiculo'] . " - " . $dado['placa']; ?></td>
           <td><?php echo $dado['post'] . " " . $dado['nomeguerra']; ?></td>
           <td><?php echo $dado['destino']; ?></td>
         </tr>
       <?php } ?>
     </table>
   </div>

   <?php
    $consulta = "SELECT * FROM cadastro.miloom;";

    $con = $conn->query($consulta) or die($mysqli->error);

    ?>
   <div>
     <table border="1">
       <h2 id="tabela-dados">REGISTRO DE MILITARES DE OUTRAS OM</h2>
       <tr>
         <td>Post / Grad</td>
         <td>Nome completo</td>
         <td>Idt</td>
         <td>OM</td>
         <td>Entrada</td>
         <td>Saída</td>
         <td>Veículo</td>
         <td>Falar com</td>
         <td>Destino</td>
       </tr>
       <?php while ($dado = $con->fetch_array()) { ?>
         <tr>
           <td><?php echo $dado['post_vis']; ?></td>
           <td><?php echo $dado['nome']; ?></td>
           <td><?php echo $dado['idtmil']; ?></td>
           <td><?php echo $dado['om']; ?></td>
           <td><?php echo $dado['entrada']; ?></td>
           <td><?php echo $dado['saida']; ?></td>
           <td><?php echo $dado['vtr'] . " - " . $dado['eb_placa']; ?></td>
           <td><?php echo $dado['post'] . " " . $dado['nomeguerra']; ?></td>
           <td><?php echo $dado['destino']; ?></td>
           </td>
         </tr>
       <?php } ?>
     </table>
   </div>
     <button class="print-button" onclick="window.print()">Imprimir</button>
 
     <a href="../index.php"><button type="button">Voltar</button></a>
    

</body>
</html>