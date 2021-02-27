<?php
session_start();
	require("principal.php");

	$username=$_POST['user'];
	$pass=$_POST['pass'];

	$sql = $conexion->query("SELECT * FROM usuarios WHERE clave ='$pass'");
	$num = '1';
	while($f = $sql->fetch_object()){
		$_SESSION['id']=$f->id;
		$_SESSION['user']=$f->usuario;
		header("Location:index.php");
		$num = '2';
	}
	if($num = '2'){
		echo '<script>alert("ESTE USUARIO NO EXISTE")</script> ';

		echo "<script>location.href='Login.php'</script>";
	}



/*
if($f=mysqli_fetch_array($sql)){
	if($pass==$f->clave){

		$_SESSION->id=$f->id;
		$_SESSION->user=$f->usuario;

		header("Location:index.html");
	}else{
		echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';

		echo "<script>location.href='Login.php'</script>";
	}
}else{
echo $f->nombre;

echo '<script>alert("ESTE USUARIO NO EXISTE")</script> ';

echo "<script>location.href='Login.php'</script>";

}
*/

?>
