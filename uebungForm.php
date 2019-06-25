<meta charset="UTF8">

<?php
	include "connect.php";
?>



<!DOCTYPE html>
<html lang="de">
<head>
	<title>Neue &#220;bung</title>
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

			$basistraining_id = $_GET['basis_id'];


		}

		else{
			die("Error al conectar con la base de datos");
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
		      <li class="dropdown active">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kunde
		        <span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="kunde.php">Kunde</a></li>
		          <li class="active"><a href="#" >Neuer Kunde</a></li>
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
		      <li class="dropdown">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Vertrag
		        <span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="vertragSauna.php">Sauna</a></li>
		          <li><a href="vertragBasistraining.php" >Basistraining</a></li>
		          <li><a href="vertragKurs.php" >Kurs</a></li>
		        </ul>
		      </li>
		    </ul>
		  </div>
		</nav>
	

			<form action="uebungAdd.php?basistraining_id=<?php echo $basistraining_id; ?>" id ="myForm" method="post">

					<div class="container">
						<h1>Neue &#220;bung</h1> <hr>
						<div class="form-group" >
							<label for="date">Datum * :</label><br>
							<input class="date form-control" type="date" id ="date" required="true" name ="Datum">
									
						</div>
						<br>

						<div class="form-group" >
							<label for="Beschreibung">Beschreibung * :</label>
							<textarea class="form-control" rows="5" id="Beschreibung" name ="Beschreibung" required="true"></textarea>
						</div>


						<div class="form-group">
							<label for="gewicht">Gewicht:</label>
							<input class="form-control" type="number" step="any" id="gewicht" name ="Gewicht">
									
						</div>

						<div class="form-group">
							<label for="anzahl">Anzahl:</label>
							<input class="form-control" type="number" step="any" id="anzahl" name ="Anzahl">
									
						</div>

						<div class="form-group">
							<label for="wiederholung">Wiederholung:</label>
							<input class="form-control" type="number" step="any" id="wiederholung" name ="Wiederholung">
									
						</div>

						<div class="form-group" hidden>
								<input class="form-control" type="number" value="0" name ="Kurs_id" id ="Kurs_id">
							
						</div>

						<br><br>

						<h2>Choose Fitnessger&#228;t (Optional)</h2> <hr>
						<table style="width:50%">
						<tr>
								<th>&nbsp;id</th>
								<th>&nbsp;Typ</th>
								<th>&nbsp;Firma</th>
								<th>&nbsp;Name</th>
								<th>&nbsp;Sel</th>
							</tr>
							
							<?php 

								$SQL = "SELECT * from fitnessgeraet";
								$Resultado = mysqli_query($Conexion_MySQL, $SQL);

								while($mostrar = mysqli_fetch_array($Resultado)){


							 ?>
							<tr>
								
								<td>&nbsp;<?php echo $mostrar['id']?></td>
								<td>&nbsp;<?php echo $mostrar['typ'] ?></td>
								<td>&nbsp;<?php echo $mostrar['firma'] ?></td>
								<td>&nbsp;<?php echo $mostrar['name'] ?></td>
								<td>
							
								<div class="radio">
								  <label>&nbsp;&nbsp;&nbsp;<input type="radio" id="radio" name="optradio" onclick="myFunction(<?php echo $mostrar['id'];?>)">

								  </label>
								</div>								
							</td>

				</tr>

				<?php 
					}
				 ?>
			</table>
			<br><br>


						<input type="submit" class="btn btn" value="Add &#220;bung" id="nuevo" >
							
					</div>
					

				
			</form>			

			

			
			<footer class="container-fluid text-center">
		  <p> Política de privacidad &nbsp; © 2018 LevelUp Firma </p>
		</footer>
		
	</body>
</html>