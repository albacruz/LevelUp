<meta charset="UTF8">
<?php 

	include "connect.php"
 ?>


 <!DOCTYPE html>
<html lang="de">
<head>
	<title>delete Adresse</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/logosinletra.jpg" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="js/myscript.js"></script>
</head>
<body>

	<?php 

		if($Conexion_MySQL){

			$id = $_GET['id']; //this needs to be sanitized
			echo "$id";

			if(!empty($id)){
				$SQL = "delete kunde_adresse from kunde_adresse where adresse_id='$id';";
				$SQL = "delete angestellter_adresse from angestellter_adresse where adresse_id='$id';";
			    $SQL .= "delete Adresse from Adresse where id='$id'";
				if(!mysqli_multi_query($Conexion_MySQL, $SQL))
					echo "Error: " .mysqli_error($Conexion_MySQL);
				else
					echo "Operacion realizada correctamente";


				}
			}



		else{
			die("Error al conectar con la base de datos");
		}


	mysqli_close($Conexion_MySQL);
	header("Location: showAdresse.php");



	 ?>
</body>


</html>