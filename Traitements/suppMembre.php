<?php
	include("../include/connexion.php");
	if (isset($_GET['iddelete'])) {
		$id=$_GET['iddelete'];
		$var ="DELETE FROM membres WHERE Matricule=?";
		$result=$connexion->prepare($var);
		$result->execute([$id]);
		
		if ($result){
			header("location:../pages/Membres.php");
		}else{
			echo "error";
		}
	}