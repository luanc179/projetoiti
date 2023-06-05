 <?php
  include_once "../connect/conexaocasa.php";
  include_once "table_civis.php";
  ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/style.css">
   <title>Controle</title>
 </head>

 <body>
   <h1>CONTROLE DE ENTRADA E SAIDA DE CIVIS</h1>
   <form action="table_civis.php" method="post">
     <div class="form-group">
       <label for="nome">Nome completo:</label>
       <input type="text" name="nome" id="nome" required>
     </div><br>

     <div class="form-group">
       <label for="cracha">Numero do cracha:</label>
       <input type="number" name="cracha" id="cracha" step="01" min="01" max="15" maxlength="2" required>
     </div><br>


     <div class="form-group">
       <label for="tpdoc">Tipo de documento:</label>
       <select name="tpdoc">
         <option value="RG">RG</option>
         <option value="CPF">CPF</option>
         <option value="CNH">CNH</option>
       </select>
     </div><br>


     <div class="form-group">
       <label for="numdoc">Numero do documento:</label>
       <input type="text" name="numdoc" id="numdoc" required>
     </div><br>


     <div class="form-group">

       <label for="entrada">Entrada:</label>
       <input type="time" name="entrada" id="entrada" required>

       <label for="saida">Saida:</label>
       <input type="time" name="saida" id="saida">

     </div>

     <div class="form-group">
       <label for="veiculo">Modelo do veiculo:</label>
       <input type="text" name="veiculo" id="veiculo">
     </div><br>

     <div class="form-group">
       <label for="placa">Placa:</label>
       <input type="text" name="placa" id="placa">
     </div><br>

     <div class="form-group">
       <label for="post">Falar com:</label>
       <select name="post">
         <option value="Post/Grad">Posto/Grad</option>
         <option value="Cel">Cel</option>
         <option value="Ten Cel">Ten Cel</option>
         <option value="Maj">Maj</option>
         <option value="Cap">Cap</option>
         <option value="1º Ten">1º Ten</option>
         <option value="2º Ten">2º Ten</option>
         <option value="Asp">Asp</option>
         <option value="Cad">Cad</option>
         <option value="ST">ST</option>
         <option value="1º Sgt">1º Sgt</option>
         <option value="2º Sgt">2º Sgt</option>
         <option value="3º Sgt">3º Sgt</option>
         <option value="Cb">Cb</option>
         <option value="Sd">Sd</option>
         <option value="Al">Al</option>
       </select>
     </div><br>

     <div class="form-group">
       <label for="nomeguerra">Nome de Guerra:</label>
       <input type="text" name="nomeguerra" id="nomeguerra" required>
     </div>

     <div class="form-group">
       <label for="destino">Destino:</label>
       <select name="destino">
         <option value="Selecionar">Selecionar</option>
         <option value="Cmdo">Cmdo</option>
         <option value="Adj CMDO">Adj Cmdo</option>
         <option value="1ª Seção">1ª Seção</option>
         <option value="2ª Seção">2ª Seção</option>
         <option value="3ª Seção">3ª Seção</option>
         <option value="4ª Seção">4ª Seção</option>
         <option value="RP">RP</option>
         <option value="COL">COL</option>
         <option value="Fisc Adm">Fisc Adm</option>
         <option value="SALC">SALC</option>
         <option value="Sec Info">Sec Info</option>
         <option value="Rancho">Rancho</option>
         <option value="Secretaria">Secretaria</option>
         <option value="SPP">SPP</option>
         <option value="Set Fin">Set Fin</option>
         <option value="Sup Doc">Sup Doc</option>
         <option value="Cmt CCAp">Cmt CCAp</option>
         <option value="Sgte CCAp">Sgte CCAp</option>
         <option value="Enc Mat CCAp">Enc Mat CCAp</option>
         <option value="Gar CCAp">Gar CCAp</option>
         <option value="Sgte Mnt">Sgte Mnt</option>
         <option value="Enc Mat Mnt">Enc Mat Mnt</option>
         <option value="GRCP">GRCP</option>
         <option value="Pel Pes">Pel Pes</option>
         <option value="Pel Leve">Pel Leve</option>
         <option value="Pel Sup">Pel Sup</option>
         <option value="Res Armto">Res Armto</option>
         <option value="Pintura">Pintura</option>
         <option value="Ótica">Ótica</option>
       </select>
     </div><br>


     <form id="cadastrar" action="table.php">
     <a href="../index.php"><button type="button">Voltar</button></a>  
     <input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar" />
     </form>
   </form>
   
   <?php
    $consulta = "SELECT * FROM civis;";

    $con = $conn->query($consulta) or die($mysqli->error);

    ?>
   <div>
     <table border="1">
       <h2 id="tabela-dados">REGISTRO</h2>
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
         <td>Opções</td>
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
           <?php $dado['id']; ?>
           <td>
             <form action="excluir_civis.php" method="get">
               <input type="submit" class="btn-excluir" name="excluir" id="excluir" value="Excluir" />
               <input type="hidden" name="id" value="<?php echo $dado['id']; ?>" />
             </form>
             <form action="./alterar_civis.php" method="get">
               <input type="hidden" name="id" value="<?php echo $dado['id']; ?>" />
               <input type="submit" class="btn-alterar" name="alterar" id="alterar" value="Alterar" />
             </form>
           </td>
           </td>
         </tr>
       <?php } ?>
     </table>
   </div>
 </body>

 </html>