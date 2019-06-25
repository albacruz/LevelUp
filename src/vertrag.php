<meta charset="UTF8">

<?php
	include "connect.php";
?>



<!DOCTYPE html>
<html lang="de">
<head>
	<title>Neuer Vertrag</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <link rel="stylesheet" href="css/style.css">
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
	<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		    	<a class="navbar-brand" href="#">LevelUp</a>
		      <!--<a> <img src="img/logo.jpg" class="logo"/>  </a>-->
		    </div>
		    <ul class="nav navbar-nav">
		      <li><a href="home.php">Home</a></li>
		      <li class="dropdown">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kunde
		        <span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="kunde.php">Kunde</a></li>
		          <li><a href="neuerKunde.php" >Neuer Kunde</a></li>
		        </ul>
		      </li>
		      <li class="dropdown">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Angestellter
		        <span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="angestellter.php">Angestellter</a></li>
		          <li><a href="neuerAngestellter.php" >Neuer Angestellter</a></li>
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
		          <li><a href="linkKundeMit.php" >Neue Mitgliedschaft</a></li>
		        </ul>
		      </li>
		      <li class="dropdown active">
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


	<?php 

		if($Conexion_MySQL){


			$table = $_GET['table'];
			$mitgliedschaft_id = $_GET['mit_id'];
			$Preis = $_REQUEST["Preis"];
			$Rabatt = $_REQUEST["Rabatt"];
			$Notiz = $_REQUEST["Notiz"];
			


			if($table == "Sauna"){

				$Beginn = $_REQUEST["Beginn"];
				$Laufzeit = $_REQUEST["Laufzeit"];

				if (empty($_POST["Rabatt"])){

					$SQL = "insert into Sauna";
					$SQL .= " (id, Beginn, Laufzeit) ";
					$SQL .= "select MAX(id)+1, '$Beginn', '$Laufzeit'";
					$SQL .= "FROM Sauna;";

					$SQL .= "insert into Vertrag ";
					$SQL .= " (id, Preis, Notiz, Mitgliedschaft_id, kurs_id) ";
					$SQL .= "select(select MAX(id)+1 FROM vertrag), '$Preis', '$Notiz',' $mitgliedschaft_id',(select MAX(id) FROM sauna);";

				}
				else{
					$SQL = "insert into Sauna";
					$SQL .= " (id, Beginn, Laufzeit) ";
					$SQL .= "select MAX(id)+1, '$Beginn', '$Laufzeit'";
					$SQL .= "FROM Sauna;";

					$SQL .= "insert into Vertrag ";
					$SQL .= " (id, Preis, Notiz, Mitgliedschaft_id, kurs_id) ";
					$SQL .= "select(select MAX(id)+1 FROM vertrag), '$Preis', '$Notiz',' $mitgliedschaft_id',(select MAX(id) FROM sauna);";

				}

				if(!mysqli_multi_query($Conexion_MySQL, $SQL))
					echo "Error: " .mysqli_error($Conexion_MySQL);
				else
					echo "";

				

			}

			else if ($table == "Kurs"){


			$Kurs_id = $_REQUEST["Kurs_id"];
			
				if (empty($_POST["Rabatt"])){
					$SQL = "insert into Vertrag ";
					$SQL .= " (id, Preis, Notiz, Mitgliedschaft_id, kurs_id) ";
					$SQL .= "select MAX(id)+1, '$Preis', '$Notiz',' $mitgliedschaft_id', '$Kurs_id'";
					$SQL .= "FROM Vertrag;";

				}

				else{
					$SQL = "insert into Vertrag ";
					$SQL .= " (id, Preis, Rabatt, Notiz, Mitgliedschaft_id, kurs_id) ";
					$SQL .= "select MAX(id)+1, '$Preis', '$Rabatt', '$Notiz',' $mitgliedschaft_id', '$Kurs_id'";
					$SQL .= "FROM Vertrag;";
				}

				if(!mysqli_multi_query($Conexion_MySQL, $SQL))
					echo "Error: " .mysqli_error($Conexion_MySQL);
				//else
					//echo "Operacion realizada correctamente";

			}

			else if($table == "Basistraining"){

				$Beginn = $_REQUEST["Beginn"];
				$Mindestlaufzeit = $_REQUEST["Mindestlaufzeit"];
				$Kuendigungsfrist = $_REQUEST["Kuendigungsfrist"];
				$angestellter_id = $_REQUEST["ang_id"];

				if(isset($_POST['Getraenk'])){
					$Getraenk = "j";
				}
				else{
					$Getraenk;
				}
			?>

				<div class="container">
				<h2>Vertrag creado correctamente</h2>
			</div>
			

			<div id="actions2">
				<div class="container">

					<div>
						<a href="vertrag2.php?beg=<?php echo "$Beginn"; ?>&mindes=<?php echo "$Mindestlaufzeit"; ?>&kuen=<?php echo "$Kuendigungsfrist"; ?>&getraenk=<?php echo "$Getraenk"; ?>&ang_id=<?php echo "$angestellter_id"; ?>&mit_id=<?php echo "$mitgliedschaft_id"; ?>&preis=<?php echo "$Preis"; ?>&notiz=<?php echo "$Notiz"; ?>" class="btn btn" id="nuevo">Finalizar</a>
					</div>
				</div>
				
			</div>
				


				<?php

			}


			if(($table == "Kurs") || ($table == "Sauna")){
				?>
					<div class="container">
				<h2>Vertrag creado correctamente</h2>
			</div>
			

			<div id="actions2">
				<div class="container">

					<div>
						<a href="vertrag<?php echo "$table"; ?>.php" class="btn btn" id="nuevo">Finalizar</a>
					</div>
				</div>
				
			</div>
			

				<?php
			}


	}

	else{
		die("Error al conectar con la base de datos");
	}

	mysqli_close($Conexion_MySQL);


	 ?>
			

			
			<footer class="container-fluid text-center">
		  <p> Política de privacidad &nbsp; © 2018 LevelUp Firma </p>
		</footer>
		
	</body>
</html>