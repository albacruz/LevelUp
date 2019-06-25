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
				$mit_id = $_GET['mit_id'];


				?>

				<form action="vertrag.php?table=<?php echo "$table"; ?>&mit_id=<?php echo "$mit_id"; ?>" method="post" id ="myForm">
			
					<div class="container">
						<h1>Neuer <?php echo "$table"; ?> Vertrag</h1> <hr>

						<div class="form-group">
							<label for="verpreis">Preis * :</label>
							<input class="form-control" type="number" step="any" id="verpreis" value="NULL" name ="Preis" required="true">
							
						</div>
						
						<div class="form-group">
							<label for="verRabatt">Rabatt:</label>
							<input class="form-control" type="number" step="any" id="verRabatt" value="NULL" name ="Rabatt">
							
						</div>

						<div class="form-group" >
							<label for="Notiz">Notiz:</label>
							<textarea class="form-control" rows="5" id="notiz" name ="Notiz"></textarea>
						</div>

						<br>

			<?php
				
				if($table ==  "Sauna"){
					?>
							<div class="form-group">
								<label for="begdate">Beginn * :</label><br>
								<input class="date form-control" type="date" id ="begdate" required="true" name ="Beginn">
										
							</div>
							<br>
							<div class="form-group">
								<label for="lauf">Laufzeit * :</label>
							    <select class="form-control" id="lauf" name ="Laufzeit" required="true">
							      	<option></option>
							        <option>6</option>
							        <option>12</option>
							        <option>24</option>
							      </select>
							</div>

							<input type="submit" class="btn btn" value="Enviar" id="nuevo"> &nbsp;
							<a href="vertrag<?php echo "$table"; ?>.php" class="btn btn" id="nuevo">Cancelar</a>
						</div>
					</form>
				</body>
				</html>
					<?php

				}

			}

			else{
				die("Error al conectar con la base de datos");
			}


			if($Conexion_MySQL){

				if ($table == "Basistraining"){
					?>
							<div class="form-group">
								<label for="begdate">Beginn * :</label><br>
								<input class="date form-control" type="date" id ="begdate" required="true" name ="Beginn">
										
							</div>
							<br>
							<div class="form-group">
								<label for="minlauf">Mindestlaufzeit * :</label>
							    <select class="form-control" id="minlauf" name ="Mindestlaufzeit" required="true">
							      	<option></option>
							        <option>6</option>
							        <option>12</option>
							        <option>24</option>
							      </select>
							</div>

							<div class="form-group">
								<label for="minlauf">K&#252;ndigungsfrist * :</label>
							    <select class="form-control" id="minlauf" name ="Kuendigungsfrist" required="true">
							      	<option></option>
							        <option>1</option>
							        <option>2</option>
							        <option>3</option>
							      </select>
							</div>

							<div class="form-group">
								<div class="checkbox">
								  <label><input class="Getraenk" name="Getraenk" type="checkbox" value="">Getr&#228;nk</label>
								</div>
										
							</div>

							<div class="form-group" hidden>
								<input class="form-control" type="number" value="0" name ="ang_id" id ="ang_id">
							
							</div>

							<br><br>
							 
				<h2>Choose Angestellter (Optional)</h2> <hr>
						<table style="width:50%">
						<tr>
								<th>&nbsp;id</th>
								<th>&nbsp;Anrede</th>
								<th>&nbsp;Name</th>
								<th>&nbsp;Vorname</th>
								<th>&nbsp;Sel</th>
							</tr>
							
							<?php 

								$SQL = "SELECT * from Angestellter";
								$Resultado = mysqli_query($Conexion_MySQL, $SQL);

								while($mostrar = mysqli_fetch_array($Resultado)){


							 ?>
							<tr>
								
								<td>&nbsp;<?php echo $mostrar['id']?></td>
								<td>&nbsp;<?php echo $mostrar['anrede'] ?></td>
								<td>&nbsp;<?php echo $mostrar['name'] ?></td>
								<td>&nbsp;<?php echo $mostrar['vorname'] ?></td>
						<!--<a class="btn btn" onclick="myFunction(<?php echo $mostrar['id'];?>)" ><i class="fa fa-circle-o" aria-hidden="true"></i></a>-->
								<td>
							
								<div class="radio">
								  <label>&nbsp;&nbsp;&nbsp;<input type="radio" id="radio" name="optradio" onclick="myFunction3(<?php echo $mostrar['id'];?>)">

								  </label>
								</div>								
							</td>

				</tr>

				<?php 
					}
				 ?>
			</table>
			<br><br>

			<input type="submit" class="btn btn" value="Enviar" id="nuevo"> &nbsp;
							<a href="vertrag<?php echo $table;?>.php" class="btn btn" id="nuevo">Cancelar</a>
						</div>
					</form>
			<?php
			}
		}

			else{
				die("Error al conectar con la base de datos");
			}

			if($Conexion_MySQL){
				if($table == "Kurs"){
					?>
						<div class="form-group" hidden>
							<input class="form-control" type="number" value="0" name ="Kurs_id" id ="Kurs_id">
							
						</div>

						<h2>Choose Kurs</h2> <hr>
				<table style="width:70%">
				<tr>
					<th>&nbsp;id</th>
					<th>&nbsp;Typ</th>
					<th>&nbsp;Beginn</th>
					<th>&nbsp;Ende</th>
					<th>&nbsp;Raum</th>
					<th>&nbsp;Terminanzahl</th>
					<th>&nbsp;Sel</th>
				</tr>
				
				<?php 

					$SQL = "SELECT * from Kurs";
					$Resultado = mysqli_query($Conexion_MySQL, $SQL);

					while($mostrar = mysqli_fetch_array($Resultado)){


				 ?>
				
				<tr>
					
					<td>&nbsp;<?php echo $mostrar['id'] ?></td>
					<td>&nbsp;<?php echo $mostrar['typ'] ?></td>
					<td>&nbsp;<?php echo $mostrar['beginn'] ?></td>
					<td>&nbsp;<?php echo $mostrar['ende'] ?></td>
					<td>&nbsp;<?php echo $mostrar['raum'] ?></td>
					<td>&nbsp;<?php echo $mostrar['terminanzahl'] ?></td>
					<td>
						
								<div class="radio">
								  <label>&nbsp;&nbsp;&nbsp;<input type="radio" id="radio" name="optradio" onclick="myFunction(<?php echo $mostrar['id'];?>)" checked>

								  </label>
								</div>								
					</td>

				</tr>

				<?php 
					}
				 ?>
			</table>	
					<br><br>			
					<input type="submit" class="btn btn" value="Enviar" id="nuevo"> &nbsp;
							<a href="vertrag<?php echo "$table"; ?>.php" class="btn btn" id="nuevo">Cancelar</a>
						</div>
					</form>
				</body>
				</html>
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