<meta charset="UTF8">
<?php 
	include "connect.php";
 ?>

<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Verträge Kurs</title>
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
		          <li class="active"><a href="#" >Kurs</a></li>
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
			<h1>Verträge Kurs</h1> <hr>
			<table style="width:100%">
				<tr>
					<th>&nbsp;id</th>
					<th>&nbsp;Typ</th>
					<th>&nbsp;Beginn</th>
					<th>&nbsp;Ende</th>
					<th>&nbsp;Raum</th>
					<th>&nbsp;Terminanzahl</th>
					<th>&nbsp;Angestellter_id</th>
					<th>&nbsp;Name</th>
					<th>&nbsp;Preis</th>
					<th>&nbsp;Rabatt</th>
					<th>&nbsp;Kunde_id</th>
					<th>&nbsp;Name</th>
					<th>&nbsp;Vorname</th>
					<th>&nbsp;Notiz</th>
					<th>&nbsp;Editar</th>
				</tr>
				
				<?php 

					$table = "Kurs";

					$SQL = "select kurs.id, kurs.typ, kurs.beginn, kurs.ende, kurs.raum, kurs.terminanzahl, angestellter.id as angestellter_id, angestellter.name as angestellter_name, vertrag.preis, vertrag.rabatt,kunde.id as kunde_id, kunde.name, kunde.vorname, vertrag.notiz
from kurs join vertrag on kurs.id= vertrag.kurs_id
join mitgliedschaft on vertrag.mitgliedschaft_id = mitgliedschaft.id
join kunde on mitgliedschaft.kunde_id = kunde.id
join angestellter_kurs on kurs.id= angestellter_kurs.kurs_id 
join angestellter on angestellter_kurs.angestellter_id = angestellter.id order by kurs.id";
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
					<td>&nbsp;<?php echo $mostrar['angestellter_id'] ?></td>
					<td>&nbsp;<?php echo $mostrar['angestellter_name'] ?></td>
					<td>&nbsp;<?php echo $mostrar['preis'] ?></td>
					<td>&nbsp;<?php echo $mostrar['rabatt'] ?></td>
					<td>&nbsp;<?php echo $mostrar['kunde_id'] ?></td>
					<td>&nbsp;<?php echo $mostrar['name'] ?></td>
					<td>&nbsp;<?php echo $mostrar['vorname'] ?></td>
					<td>&nbsp;<?php echo $mostrar['notiz'] ?></td>
					<td>
						<a class="btn btn" href="editar.php?id=<?php echo $mostrar['id']; ?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
					</td>
				</tr>

				<?php 
					}
				 ?>
			</table>

			<br><br>

			<a href="neuerVertrag.php?table=<?php echo $table;?>" class="btn btn" role="button" id="nuevo">Neuer Vertrag</a>
		</div>	

		
				

	    
	    <footer class="container-fluid text-center">
		  <p> Política de privacidad &nbsp; © 2018 LevelUp Firma </p>
		</footer>
    </body>
</html>


