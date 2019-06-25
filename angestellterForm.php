<meta charset="UTF8">

<?php
	include "connect.php";
?>



<!DOCTYPE html>
<html lang="de">
<head>
	<title>Neuer Angestellter</title>
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

<?php


	if($Conexion_MySQL){

		$table = "angestellter";
		$Anrede = $_REQUEST["Anrede"];
		$Name 	= $_REQUEST["Name"];
		$Vorname = $_REQUEST["Vorname"];
		$Geburtsdatum = $_REQUEST["Geburtsdatum"];
		$Email = $_REQUEST["Email"];
		$Telefon = $_REQUEST["Telefon"];
		$Stundenlohn = $_REQUEST["Stundenlohn"];
		$Wochenarbeitszeit = $_REQUEST["Wochenarbeitszeit"];
		$Einstellungsdatum = $_REQUEST["Einstellungsdatum"];
		$Notiz = $_REQUEST["Notiz"];


		if (empty($_POST["Stundenlohn"]))
		{      
		   if (empty($_POST["Wochenarbeitszeit"]))
			{       
			   if (empty($_POST["Einstellungsdatum"]))
				{     
					
					$SQL = "insert into Angestellter ";
					$SQL .= " (id, Anrede, Name, Vorname, Geburtsdatum, Email, Telefon, Notiz) ";
					$SQL .= "select MAX(id)+1 , '$Anrede', '$Name', '$Vorname','$Geburtsdatum', '$Email', '$Telefon', '$Notiz'";
					$SQL .= "FROM Angestellter";
				}
				else{

					
					$SQL = "insert into Angestellter ";
					$SQL .= " (id, Anrede, Name, Vorname, Geburtsdatum, Email, Telefon, Einstellungsdatum, Notiz) ";
					$SQL .= "select MAX(id)+1 , '$Anrede', '$Name', '$Vorname','$Geburtsdatum', '$Email', '$Telefon', '$Einstellungsdatum', '$Notiz'";
					$SQL .= "FROM Angestellter";

				}
			   
			}
			else{
				if (empty($_POST["Einstellungsdatum"]))
				{     
					
					$SQL = "insert into Angestellter ";
					$SQL .= " (id, Anrede, Name, Vorname, Geburtsdatum, Email, Telefon, Wochenarbeitszeit, Notiz) ";
					$SQL .= "select MAX(id)+1 , '$Anrede', '$Name', '$Vorname','$Geburtsdatum', '$Email', '$Telefon', '$Wochenarbeitszeit', '$Notiz'";
					$SQL .= "FROM Angestellter";
				}
				else{

					
					$SQL = "insert into Angestellter ";
					$SQL .= " (id, Anrede, Name, Vorname, Geburtsdatum, Email, Telefon, Wochenarbeitszeit, Einstellungsdatum, Notiz) ";
					$SQL .= "select MAX(id)+1 , '$Anrede', '$Name', '$Vorname','$Geburtsdatum', '$Email', '$Telefon', '$Wochenarbeitszeit', '$Einstellungsdatum', '$Notiz'";
					$SQL .= "FROM Angestellter";

				}

			}
		}
		else{    

			if(empty($_POST["Wochenarbeitszeit"])){  
			   if (empty($_POST["Einstellungsdatum"]))
				{     
					
					$SQL = "insert into Angestellter ";
					$SQL .= " (id, Anrede, Name, Vorname, Geburtsdatum, Email, Telefon, Stundenlohn, Notiz) ";
					$SQL .= "select MAX(id)+1 , '$Anrede', '$Name', '$Vorname','$Geburtsdatum', '$Email', '$Telefon','$Stundenlohn', '$Notiz'";
					$SQL .= "FROM Angestellter";
				}
				else{

					
					$SQL = "insert into Angestellter ";
					$SQL .= " (id, Anrede, Name, Vorname, Geburtsdatum, Email, Telefon, Stundenlohn, Einstellungsdatum, Notiz) ";
					$SQL .= "select MAX(id)+1 , '$Anrede', '$Name', '$Vorname','$Geburtsdatum', '$Email', '$Telefon', '$Stundenlohn', '$Einstellungsdatum', '$Notiz'";
					$SQL .= "FROM Angestellter";

				}
			   
			}
			else{
				if (empty($_POST["Einstellungsdatum"]))
				{     
					
					$SQL = "insert into Angestellter ";
					$SQL .= " (id, Anrede, Name, Vorname, Geburtsdatum, Email, Telefon, Stundenlohn, Wochenarbeitszeit, Notiz) ";
					$SQL .= "select MAX(id)+1 , '$Anrede', '$Name', '$Vorname','$Geburtsdatum', '$Email', '$Telefon', '$Stundenlohn', '$Wochenarbeitszeit', '$Notiz'";
					$SQL .= "FROM Angestellter";
				}
				else{

					
					$SQL = "insert into Angestellter ";
					$SQL .= " (id, Anrede, Name, Vorname, Geburtsdatum, Email, Telefon, Stundenlohn, Wochenarbeitszeit, Einstellungsdatum, Notiz) ";
					$SQL .= "select MAX(id)+1 , '$Anrede', '$Name', '$Vorname','$Geburtsdatum', '$Email', '$Telefon', '$Stundenlohn', '$Wochenarbeitszeit', '$Einstellungsdatum', '$Notiz'";
					$SQL .= "FROM Angestellter";

				}

			}

		}


		if(!mysqli_query($Conexion_MySQL, $SQL))
			echo "Error: " .mysqli_error($Conexion_MySQL);
		else
			echo "";


	}

	else{
		die("Error al conectar con la base de datos");
	}


	mysqli_close($Conexion_MySQL);



?>


<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		    	<a class="navbar-brand" href="#">LevelUp</a>
		      <!--<a> <img src="img/logo.jpg" class="logo"/>  </a>-->
		    </div>
		    <ul class="nav navbar-nav">
		      <li><a href="#">Home</a></li>
		      <li class="dropdown">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kunde
		        <span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="kunde.php">Kunde</a></li>
		          <li><a href="neuerKunde.php" >Neuer Kunde</a></li>
		        </ul>
		      </li>
		      <li class="dropdown active">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Angestellter
		        <span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="angestellter.php">Angestellter</a></li>
		          <li class="active"><a href="#" >Neuer Angestellter</a></li>
		        </ul>
		      </li>
		      <li><a href="showAdresse.php">Adresse</a></li>
		      <li class="dropdown">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kurs
		        <span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="kurs.php">Kurs</a></li>
		          <li><a href="neuerKurs.php">Neuer Kurs</a></li>
		        </ul>
		      </li>
		      <li class="dropdown">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mitgliedschaft
		        <span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="mitgliedschaft.php">Mitgliedschaft</a></li>
		          <li><a href="linkKundeMit.php">Neue Mitgliedschaft</a></li>
		        </ul>
		      </li>
		      <li class="dropdown">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Vertrag
		        <span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="vertragSauna.php">Sauna</a></li>
		          <li><a href="vertragBasistraining.php" >Basistraining</a></li>
		          <li><a href="vertragKurs.php" >Kurs</a></li>
		        </ul>
		      </li>
		      <li class="dropdown">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#">&#220;bung
		        <span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="uebung.php">&#220;bung</a></li>
		          <li><a href="neueUebung.php" >Neue &#220;bung</a></li>
		        </ul>
		      </li>
		    </ul>
		  </div>
		</nav>
	

			<div class="container">
				<h2>Cliente creado correctamente</h2>
			</div>
			

			<div id="actions2">
				<div class="container">

					<div>
						<button type="button" class="btn btn" class="option" id="nuevo" onclick="myFunction2()">Add Adresse</button>
						<a href="angestellter.php" class="btn btn" id="nuevo">Finalizar</a>
					</div>
				</div>
				
			</div>
			
			<div id="actions" style="display: none">
				<form action="adresse.php?table=<?php echo $table; ?>" method="post">

					<div class="container">
						<div class="form-group">
						     <label for="usrstr">Stra&szlig;e * :</label>
						     <input type="text" class="form-control" id="usrstr" name ="strasse" required="true">
						</div>

						<div class="form-group">
							     <label for="usrhnum">Hausnummer * :</label>
							     <input type="text" class="form-control" id="usrhnum" name ="Hausnum" required="true">
						</div>

						<div class="form-group" for="formulario">
							<label for="usrpost">Postleitzahl *:</label>
							<input class="form-control" type="number" step="any" id="usrpost" name ="Postleitzahl" required="true">
									
						</div>

							<div class="form-group" for="formulario">
							     <label for="usrort">Ort * :</label>
							     <input type="text" class="form-control" id="usrort" name ="Ort" required="true">
							 </div>

						<input type="submit" class="btn btn" value="Add Adresse" id="nuevo"> &nbsp;
						<a href="angestellter.php" class="btn btn" id="nuevo">No crear Adresse</a>
					
					</div>
				
				</form>
				
			</div>

			
			<footer class="container-fluid text-center">
		  <p> Política de privacidad &nbsp; © 2018 LevelUp Firma </p>
		</footer>
		
	</body>
</html>