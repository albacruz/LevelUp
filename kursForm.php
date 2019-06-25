<meta charset="UTF8">

<?php
	include "connect.php";


		if($Conexion_MySQL){

			$Typ = $_REQUEST["Typ"];
			$Beginn 	= $_REQUEST["Beginn"];
			$Ende = $_REQUEST["Ende"];
			$Raum = $_REQUEST["Raum"];
			$Terminanzahl = $_REQUEST["Terminanzahl"];

			if (empty($_POST["Terminanzahl"]))
			{      
			   $SQL = "insert into Kurs ";
				$SQL .= " (id, Typ, Beginn, Ende, Raum) ";
				$SQL .= "select MAX(id)+1, '$Typ', '$Beginn', '$Ende',' $Raum'";
				$SQL .= "FROM Kurs";
			   
			}
			else{
				$SQL = "insert into Kurs ";
				$SQL .= " (id, Typ, Beginn, Ende, Raum, Terminanzahl) ";
				$SQL .= "select MAX(id)+1, '$Typ', '$Beginn', '$Ende',' $Raum', '$Terminanzahl'";
				$SQL .= "FROM Kurs";
			}




		if(!mysqli_query($Conexion_MySQL, $SQL))
			echo "Error: " .mysqli_error($Conexion_MySQL);
		else
			echo "Operacion realizada correctamente";


	}

	else{
		die("Error al conectar con la base de datos");
	}


	mysqli_close($Conexion_MySQL);
	header("Location: linkAngestellter.php");


	 ?>