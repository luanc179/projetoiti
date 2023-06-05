<?php
  include_once "../connect/conexaocasa.php";
include_once "./table_civis.php";

if(isset($_GET["id"])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM civis WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows === 0) exit('Nenhum registro encontrado');

    $dados = $result->fetch_assoc();

    $stmt->close();
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
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
	

    $stmt = $conn->prepare("UPDATE civis SET nome=?, cracha=?, tpdoc=?, numdoc=?,entrada=?, saida=?, veiculo=?, placa=?, post=?, nomeguerra=?, destino=? WHERE id=?");
    $stmt->bind_param("sisssssssssi", $nome, $cracha, $tpdoc, $numdoc, $entrada, $saida, $veiculo, $placa, $post, $nomeguerra, $destino, $id);
    $stmt->execute();

    // redirecionar para a página de registro ou exibir mensagem de sucesso;
	echo '<script> alert ("Alterado com sucesso!"); location.href=("./cadastroCivis.php")</script>';
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/style.css">
	<title>Editar Registro</title>
</head>
<body>
	<h1>Editar Registro</h1>
	<?php
		if(isset($_GET['id'])){
			$email = $_GET['id'];
			$consulta = "SELECT * FROM civis WHERE id='$id'";
			$con = $conn->query($consulta) or die($conn->error);
			$dado = $con->fetch_array();
		}
	?>
	<form method="POST" action="">
		<label for="nome">Nome completo:</label><br>
		<input type="text" name="nome" value="<?php echo $dado['nome'] ?>" required><br>
		<label for="cracha">Numero do cracha:</label><br>
		<input type="number" name="cracha" value="<?php echo $dado['cracha'] ?>" step="01" min="01" max="15" maxlength="2" required><br>
		<label for="numdoc">Numero do documento:</label><br>
		<input type="text" name="tpdoc" value="<?php echo $dado['tpdoc'] ?>" required><br>
		<label for="numdoc">Numero do documento:</label><br>
		<input type="text" name="numdoc" value="<?php echo $dado['numdoc'] ?>" required><br>
		<label for="entrada">Entrada:</label><br>
		<input type="time" name="entrada" value="<?php echo $dado['entrada'] ?>"required><br>
		<label for="saida">Saida:</label><br>
		<input type="time" name="saida" value="<?php echo $dado['saida'] ?>"><br>
		<label for="veiculo">Veiculo:</label><br>
		<input type="text" name="veiculo" value="<?php echo $dado['veiculo'] ?>"><br>
		<label for="placa">Placa:</label><br>
		<input type="text" name="placa" value="<?php echo $dado['placa'] ?>"><br>
		<label for="post">Post/Grad:</label><br>
		<input type="text" name="post" value="<?php echo $dado['post'] ?>" required><br>
		<label for="nomeguerra">Nome de Guerra:</label><br>
		<input type="text" name="nomeguerra" value="<?php echo $dado['nomeguerra'] ?>" required><br>
		<label for="destino">Destino:</label><br>
		<input type="text" name="destino" value="<?php echo $dado['destino'] ?>" required><br>		
		<a href="../index.php"><button type="button">Voltar</button></a>
		<input type="submit" value="Salvar">
	</form>
	<br>
</body>
</html>