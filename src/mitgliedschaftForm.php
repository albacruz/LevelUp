<meta charset="UTF8">

<?php
	include "connect.php";
?>



<!DOCTYPE html>
<html lang="de">
<head>
	<title>Neue Mitgliedschaft</title>
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


	<?php 

		if($Conexion_MySQL){

			$Beitritt = $_REQUEST["Beitritt"];
			$Austritt 	= $_REQUEST["Austritt"];
			$Zahlungsart = $_REQUEST["Zahlungsart"];
			$id_kunde = $_GET['id_kunde'];
			$id_empty = NULL;
			
		}



	 ?>
	




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
		          <li><a href="neuerKunde.php" >neuer Kunde</a></li>
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
		      <li class="dropdown active">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mitgliedschaft
		        <span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="linkKundeMit.php">Mitgliedschaft</a></li>
		          <li class="active"><a href="#" >Neue Mitgliedschaft</a></li>
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

						<h2>Choose Aktion (Optional)</h2>
						<table style="width:100%">
							<tr>
								<th>&nbsp;id</th>
								<th>&nbsp;Beschreibung</th>
								<th>&nbsp;Seleccionar</th>
							</tr>
							
							<?php 

								$SQL = "SELECT * from Aktion";
								$Resultado = mysqli_query($Conexion_MySQL, $SQL);

								while($mostrar = mysqli_fetch_array($Resultado)){


							 ?>
							<tr>
								
								<td>&nbsp;<?php echo $mostrar['id']?></td>
								<td>&nbsp;<?php echo $mostrar['beschreibung'] ?></td>


								<td>
									<a class="btn btn" href="mit_akt.php?id=<?php echo $mostrar['id'];?>&id_kunde=<?php echo $id_kunde;?>&Beitritt=<?php echo $Beitritt;?>&Austritt=<?php echo $Austritt;?>&Zahlungsart=<?php echo $Zahlungsart;?>"><i class="fa fa-circle-o" aria-hidden="true"></i></a>

								</td>
							</tr>

							<?php 
								}
							 ?>
						</table>
						
						<br>
						<a href="mit_akt.php?id=<?php echo $id_empty;?>&id_kunde=<?php echo $id_kunde;?>&Beitritt=<?php echo $Beitritt;?>&Austritt=<?php echo $Austritt;?>&Zahlungsart=<?php echo $Zahlungsart;?>" class="btn btn" id="nuevo">No Aktion</a>&nbsp;
						<a href="mitgliedschaft.php" class="btn btn" id="nuevo">Cancelar</a>
					
					</div>

			
			<footer class="container-fluid text-center">
		  <p> Política de privacidad &nbsp; © 2018 LevelUp Firma </p>
		</footer>
		
	</body>
</html>