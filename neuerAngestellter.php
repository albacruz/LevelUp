<!DOCTYPE html>
<html lang="de">
    <head>
        <title>neuer Angestellter</title>
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

    	<form action="angestellterForm.php" method="post">
		
			<div class="container">
				<h1>neuer Angestellter</h1> <hr>
				<div class="form-group">
					<label for="sel1">Anrede * :</label>
				    <select class="form-control" id="sel1" name ="Anrede" required="true">
				      	<option></option>
				        <option>Frau</option>
				        <option>Herr</option>
				      </select>
				</div>
			

				<div class="form-group">
			      <label for="usrname">Name * :</label>
			      <input type="text" class="form-control" id="usrname" name ="Name" required="true">
			    </div>

			    <div class="form-group">
			      <label for="usrvorname">Vorname * :</label>
			      <input type="text" class="form-control" id="usrvorname" name ="Vorname" required="true">
			    </div>

				<div class="form-group">
					<label for="usrdate">Geburtsdatum * :</label><br>
					<input class="date form-control" type="date" id ="usrdate" required="true" name ="Geburtsdatum">
							
				</div>
				<br>

				<div class="form-group">
				    <label for="usremail1">Email:</label>
				    <input type="email" class="form-control" id="usremail" aria-describedby="emailHelp" name ="Email">
				    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
				</div>

				<div class="form-group">
					<label for="usrnum">Telefonnummer:</label>
					<input class="form-control" type="tel" id="usrnum" name ="Telefon">
					
				</div>

				<div class="form-group">
					<label for="usrlohn">Stundenlohn:</label>
					<input class="form-control" type="number" step="any" id="usrlohn" value="NULL" name ="Stundenlohn">
					
				</div>

				<div class="form-group">
					<label for="usrarbeitszeit">Wochenarbeitszeit:</label>
					<input class="form-control" type="number" step="any" id="usrarbeitszeit" value="NULL" name ="Wochenarbeitszeit">
					
				</div>

				<!--<input type="number" name="quantity" min="1" max="5">-->

				<div class="form-group">
					<label for="usreinstdate">Einstellungsdatum :</label><br>
					<input class="date form-control" type="date"  id ="usreinstdate" name ="Einstellungsdatum">
							
				</div>
				<br>

				<div class="form-group">
					<label for="Notiz">Notiz:</label>
					<textarea class="form-control" rows="5" id="notiz" name ="Notiz"></textarea>
				</div>

				<br>

				<input type="submit" class="btn btn" value="Enviar" id="nuevo"> &nbsp;
				<a href="angestellter.php" class="btn btn" id="nuevo">Cancelar</a>
				<!--<a class="btn btn-primary" href="adresse.php" id="nuevo">add Adresse</a>-->

			</div>
		</form>

	

	    
	    <footer class="container-fluid text-center">
		  <p> Política de privacidad &nbsp; © 2018 LevelUp Firma </p>
		</footer>
    </body>
</html>


