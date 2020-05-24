<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$n=$_POST['nombre'];
	$a=$_POST['apellido'];
	$e=$_POST['email'];
	$t=$_POST['telefono'];

	$sql="UPDATE t_persona set nombre='$n',
								apellido='$a',
								email='$e',
								telefono='$t'
				where id='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>