<meta charset="UTF8">

<?php
	include "connect.php";
?>



<!DOCTYPE html>
<html lang="de">
<head>
	<title>Link Angestellter</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <link rel="stylesheet" href="style.css">
        <link type="text/css" href="bootstrap.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="img/logosinletra.jpg" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="js/myscript.js"></script>
</head>
<body>

	<p> estamos aqui</p>

	<?php 

		if($Conexion_MySQL){
			
			$id = $_GET['id']; //this needs to be sanitized 

			if(!empty($id)){
				$SQL = "insert into angestellter_kurs";
				$SQL .= " (kurs_id, angestellter_id) ";
				$SQL .= "select MAX(id), '$id'";
				$SQL .= "FROM Kurs";
				
				if(!mysqli_query($Conexion_MySQL, $SQL))
					echo "Error: " .mysqli_error($Conexion_MySQL);
				else
					echo "";

			}


	}

	else{
		die("Error al conectar con la base de datos");
	}


	mysqli_close($Conexion_MySQL);
	header("Location: kurs.php");



	 ?>
	
		
	</body>
</html>