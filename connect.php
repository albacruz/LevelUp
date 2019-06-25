<meta charset="UTF8">
<?php

//Lo primero es crear una conexion con la base de datos. No es necesario pero
//para clarificar lo asignamos a tres variables.

$Servidor = "localhost";
$Usuario = "Alba Cruz Torres";
$Clave = "Cruz2796";
$BaseDatos = "levelupfirma";

//Creamos la conexion y almacenamos el handle

$Conexion_MySQL = new mysqli($Servidor, $Usuario, $Clave, $BaseDatos);

//Comprobamos que la conexion es valida (la funcion die termina el programa
//mostrando un mensaje, es como un echo mas exit).

if($Conexion_MySQL->connect_error) die ("Fallo!! " .$Conexion_MySQL->connect_error);
echo "";


$SQL 

?>