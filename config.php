<?php

	function connection()
	{
		$server = "localhost";
		$user = "root";
		$pass = "";
		$DataBase = "loggin";
		
		if ($conexion = mysql_connect($server, $user,$pass))
		{
			mysql_query("create database if not exists $DataBase");
			mysql_query("use $DataBase");
			return $conexion;
		}
		else
		{
			echo "No se puede establece la conexion";
		}
	}
	
	function crearTablas()
	{
		$db = connection();
		$tablaUsuarios = "
		CREATE TABLE users
		(
			id INTEGER PRIMARY KEY NOT NULL  AUTO_INCREMENT,
			nombre VARCHAR ( 50 ),
			pass VARCHAR ( 50 )
		)
		";
		echo"
			<table colspan='3' class='formulario' align='center'>";
			if(mysql_query($tablaUsuarios,$db))
			{
				echo"
				<tr><td class='ok'>Tabla Usuarios [OK]</td></tr>";
			}
			else
			{
				echo"
				<tr><td class='error'>Tabla Usuarios [FALLO]</td></tr>";
			}
		
		$cuentaAdministrador = "INSERT INTO users VALUES (001, 'rafa', 'rahs')";	

		echo "
			<table colspan='3' class='formulario' align='center'>";
			if(mysql_query($cuentaAdministrador,$db))
			{
				echo"
				<tr><td class='ok'>Ingreso del usuario [OK]</td></tr>";
			}
			else
			{
				echo"
				<tr><td class='error'>Ingreso del usuario [FALLO]</td></tr>";
			}
	}
?>