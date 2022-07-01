<?php

require_once "get.model.php";

class Connection
{

	/*=============================================
	Información de la base de datos
	=============================================*/

	static public function infoDatabase()
	{

		$infoDB = array(

			"database" => "facturaelectronica_dev",
			"user" => "admin",
			"pass" => "Adm$$2022fe"


		);

		return $infoDB;
	}

	/*=============================================
	APIKEY
	=============================================*/

/* Esta es una función que devuelve una cadena. */
	static public function apikey()
	{

		return "c5LTA6WPbMwHhEabYu77nN9cn4VcMj";
	}

	/*=============================================
	Acceso público
	=============================================*/
	/* Esta es una función que devuelve una matriz de tablas que son públicas. */
	static public function publicAccess()
	{
		/* Crear una matriz con un elemento. */
		$tables = ["facturas"];
		return $tables;
	}

	/*=============================================
	Conexión a la base de datos
	=============================================*/

	static public function connect()
	{


		try {

			/* Esta es una conexión PDO a la base de datos. */
			$link = new PDO(
				"mysql:host=admcloudfe.cyzwce0re6hm.us-east-2.rds.amazonaws.com;dbname=" . Connection::infoDatabase()["database"],
				Connection::infoDatabase()["user"],
				Connection::infoDatabase()["pass"]
			);

			$link->exec("set names utf8");
		} catch (PDOException $e) {

			die("Error: " . $e->getMessage());
		}

		return $link;
	}

	/*=============================================
	Validar existencia de una tabla en la bd
	=============================================*/

	static public function getColumnsData($table, $columns)
	{

		/*=============================================
		Traer el nombre de la base de datos
		=============================================*/

		$database = Connection::infoDatabase()["database"];

		/*=============================================
		Traer todas las columnas de una tabla
		=============================================*/

		/* Esta es una conexión PDO a la base de datos. */
		$validate = Connection::connect()
			->query("SELECT COLUMN_NAME AS item FROM information_schema.columns WHERE table_schema = '$database' AND table_name = '$table'")
			->fetchAll(PDO::FETCH_OBJ);

		/*=============================================
		Validamos existencia de la tabla
		=============================================*/

		if (empty($validate)) {

			return null;
		} else {

			/*=============================================
			Ajuste de selección de columnas globales
			=============================================*/

			if ($columns[0] == "*") {

				array_shift($columns);
			}

			/*=============================================
			Validamos existencia de columnas
			=============================================*/

			$sum = 0;

			foreach ($validate as $key => $value) {

				$sum += in_array($value->item, $columns);
			}



		/* Devolver el valor de  si  es igual al recuento de . */
			return $sum == count($columns) ? $validate : null;
		}
	}

	/*=============================================
	Generar Token de Autenticación
	=============================================*/

	/* Esto es crear un token. */
	static public function jwt($id, $email)
	{

		/* Esto es crear un token. */
		$time = time();

		$token = array(

			"iat" =>  $time, //Tiempo en que inicia el token
			"exp" => $time + (60 * 60 * 24), // Tiempo en que expirará el token (1 día)
			"data" => [

				"id" => $id,
				"email" => $email
			]

		);

		return $token;
	}

	/*=============================================
	Validar el token de seguridad
	=============================================*/
	/* Esta es una función que valida el token. */

	static public function tokenValidate($token, $table, $suffix)
	{

		/*=============================================
		Traemos el usuario de acuerdo al token
		=============================================*/
		/* Esta es una función que devuelve una matriz de tablas que son públicas. */
		$user = GetModel::getDataFilter($table, "token_exp_" . $suffix, "token_" . $suffix, $token, null, null, null, null);

		if (!empty($user)) {

			/*=============================================
			Validamos que el token no haya expirado
			=============================================*/

			/* Esto es comprobar si el token ha caducado. */
			$time = time();

			if ($time < $user[0]->{"token_exp_" . $suffix}) {

				return "ok";
			} else {

				return "expired";
			}
		} else {

			/* Devolviendo una cadena. */
			return "no-auth";
		}
	}
}
