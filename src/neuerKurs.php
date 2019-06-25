<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Neuer Kurs</title>
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
		      <li class="dropdown active">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kurs
		        <span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="kurs.php">Kurs</a></li>
		          <li class="active"><a href="#">Neuer Kurs</a></li>
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

    	<form action="kursForm.php" method="post">
		
			<div class="container">
				<h1>Neuer Kurs</h1> <hr>

				<div class="form-group">
					<label for="kursTyp">Typ * :</label>
				    <select class="form-control" id="kursTyp" name ="Typ" required="true">
				      	<option></option>
				        <option>Beckenbodengymnastik</option>
				        <option>Circel Training</option>
				        <option>Gewichtsreduktion</option>
				        <option>Herz-Kreislauf</option>
				        <option>Indoor-Cycling</option>
				        <option>Koronarsport</option>
				        <option>Pilates</option>
				        <option>Rückengymnastik</option>
				        <option>Step</option>
				        <option>Yoga</option>
				        <option>Zumba</option>
				      </select>
				</div>

			    <div class="form-group" >
					<label for="kursbeginn">Beginn * :</label><br>
					<input class="date form-control" type="date" id ="kursbeginn" required="true" name ="Beginn">
							
				</div>

				<br>

				<div class="form-group" >
					<label for="kursende">Ende * :</label><br>
					<input class="date form-control" type="date" id ="kursende" required="true" name ="Ende">
							
				</div>

			    <div class="form-group" >
			      <label for="kursraum">Raum:</label>
			      <input type="text" class="form-control" id="kursraum" name ="Raum">
			    </div>

				<div class="form-group" for="formulario">
					<label for="kursanz">Terminanzahl:</label>
					<input class="form-control" type="number" step="any" id="kursanz" name ="Terminanzahl">
									
				</div>

				<br>

				<input type="submit" class="btn btn" value="Enviar" id="nuevo"> &nbsp;
				<a href="kurs.php" class="btn btn" id="nuevo">Cancelar</a>
			</div>

			
				<!--<a class="btn btn-primary" href="adresse.php" id="nuevo">add Adresse</a>-->
		</form>

	

	    
	    <footer class="container-fluid text-center">
		  <p> Política de privacidad &nbsp; © 2018 LevelUp Firma </p>
		</footer>
    </body>
</html>

