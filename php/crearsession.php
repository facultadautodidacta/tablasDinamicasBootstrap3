<?php 
	session_start();

	$idper=$_POST['valor'];

	$_SESSION['consulta']=$idper;

	echo $idper;

 ?>