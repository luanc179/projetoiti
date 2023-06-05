<?php
  include_once "./connect/conexaocasa.php";
include_once "./table_milOOM.php";

if(isset($_GET["id"])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM cadastro.miloom WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows === 0) exit('Nenhum registro encontrado');

    $dados = $result->fetch_assoc();

    $stmt->close();
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post_vis = $_POST["post_vis"];
    $nome = $_POST["nome"];
    $idtmil = $_POST["idtmil"];
    $om = $_POST["om"];
    $entrada = $_POST["entrada2"];
    $saida = $_POST["saida2"];
    $vtr = $_POST["vtr"];
    $eb_placa = $_POST["eb_placa"];
    $post = $_POST["post2"];
    $nomeguerra = $_POST["nomeguerra2"];
    $destino = $_POST["destino2"];

	

    $stmt = $conn->prepare("UPDATE miloom SET post_vis=?, nome=?,idtmil=?, om=?,entrada=?, saida=?, vtr=?, eb_placa=?, post=?, nomeguerra=?, destino=? WHERE id=?");
    $stmt->bind_param("sssssssssssi", $post_vis, $nome, $idtmil, $om, $entrada, $saida, $vtr, $eb_placa, $post, $nomeguerra, $destino, $id);
    $stmt->execute();

    // redirecionar para a página de registro ou exibir mensagem de sucesso;
	echo '<script> alert ("Alterado com sucesso!"); location.href=("./cadastro_milOOM.php")</script>';
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
			$consulta2 = "SELECT * FROM cadastro.miloom WHERE id='$id'";
			$con = $conn->query($consulta2) or die($conn->error);
			$dado = $con->fetch_array();
		}
	?>
	<form method="POST" action="">
		<label for="post_vis">Post/Grad:</label><br>
		<input type="text" name="post_vis" value="<?php echo $dado['post_vis'] ?>"><br>
		<label for="nome">Nome completo:</label><br>
		<input type="text" name="nome" value="<?php echo $dado['nome'] ?>"><br>
		<label for="idtmil">Idt:</label><br>
		<input type="number" name="idtmil" value="<?php echo $dado['idtmil'] ?>"  maxlength="15"><br>
		<label for="numdoc">OM:</label><br>
		<input type="text" name="om" value="<?php echo $dado['om'] ?>"><br>
		<label for="entrada">Entrada:</label><br>
		<input type="time" name="entrada" value="<?php echo $dado['entrada'] ?>"><br>
		<label for="saida">Saida:</label><br>
		<input type="time" name="saida" value="<?php echo $dado['saida'] ?>"><br>
		<label for="vtr">Veiculo / Viatura:</label><br>
		<input type="text" name="vtr" value="<?php echo $dado['vtr'] ?>"><br>
		<label for="placa">Placa / EB:</label><br>
		<input type="text" name="eb_placa" value="<?php echo $dado['eb_placa'] ?>"><br>
		<label for="post">Post/Grad:</label><br>
		<input type="text" name="post" value="<?php echo $dado['post'] ?>"><br>
		<label for="nomeguerra">Nome de Guerra:</label><br>
		<input type="text" name="nomeguerra" value="<?php echo $dado['nomeguerra'] ?>"><br>
		<label for="destino">Destino:</label><br>
		<input type="text" name="destino" value="<?php echo $dado['destino'] ?>"><br>		
		<a href="../index.php"><button type="button">Voltar</button></a>
		<input type="submit" value="Salvar">
	</form>
	<br>
</body>
</html>