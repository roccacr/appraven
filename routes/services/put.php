<?php

require_once "models/connection.php";
require_once "controllers/put.controller.php";

/* Comprobando si el id y el nameId están configurados. */
if (isset($_GET["id"]) && isset($_GET["nameId"])) {

	/*=============================================
	Capturamos los datos del formulario
	=============================================*/

	$data = array();
	parse_str(file_get_contents('php://input'), $data);

	/*=============================================
	Separar propiedades en un arreglo
	=============================================*/

	$columns = array();

	/* Obtener las claves de la matriz y empujarlas a la matriz . */
	foreach (array_keys($data) as $key => $value) {

		array_push($columns, $value);
	}

	array_push($columns, $_GET["nameId"]);

	$columns = array_unique($columns);

	/*=============================================
	Validar la tabla y las columnas
	=============================================*/

	if (empty(Connection::getColumnsData($table, $columns))) {

		/* Esta es una función de PHP que devuelve un mensaje de error si los campos del formulario no
	coinciden con la base de datos. */
		$json = array(
			'status' => 400,
			'results' => "Error: Fields in the form do not match the database"
		);

		echo json_encode($json, http_response_code($json["status"]));

		return;
	}

	if (isset($_GET["token"])) {

		/*=============================================
		Peticion PUT para usuarios no autorizados
		=============================================*/

		if ($_GET["token"] == "no" && isset($_GET["except"])) {

			/*=============================================
			Validar la tabla y las columnas
			=============================================*/

			/* Comprobando si la columna existe en la base de datos. */
			$columns = array($_GET["except"]);

			if (empty(Connection::getColumnsData($table, $columns))) {

				$json = array(
					'status' => 400,
					'results' => "Error: Fields in the form do not match the database"
				);

				echo json_encode($json, http_response_code($json["status"]));

				return;
			}

			/*=============================================
			Solicitamos respuesta del controlador para crear datos en cualquier tabla
			=============================================*/

			/* Llamar a la función putData en la clase PutController. */
			$response = new PutController();
			$response->putData($table, $data, $_GET["id"], $_GET["nameId"]);

			/*=============================================
		Peticion PUT para usuarios autorizados
		=============================================*/
		} else {

			/* Este es un operador ternario. Es una forma abreviada de una declaración if-else. */
			$tableToken = $_GET["table"] ?? "admins";
			$suffix = $_GET["suffix"] ?? "admin";

			$validate = Connection::tokenValidate($_GET["token"], $tableToken, $suffix);

			/*=============================================
			Solicitamos respuesta del controlador para editar datos en cualquier tabla
			=============================================*/

			/* Este es un operador ternario. Es una forma abreviada de una declaración if-else. */
			if ($validate == "ok") {

				$response = new PutController();
				$response->putData($table, $data, $_GET["id"], $_GET["nameId"]);
			}

			/*=============================================
			Error cuando el token ha expirado
			=============================================*/
			/* Este es un operador ternario. Es una forma abreviada de una declaración if-else. */

			if ($validate == "expired") {

				$json = array(
					'status' => 303,
					'results' => "Error: The token has expired"
				);

				echo json_encode($json, http_response_code($json["status"]));

				return;
			}

			/*=============================================
			Error cuando el token no coincide en BD
			=============================================*/

			/* Este es un operador ternario. Es una forma abreviada de una declaración if-else. */
			if ($validate == "no-auth") {

				$json = array(
					'status' => 400,
					'results' => "Error: The user is not authorized"
				);

				echo json_encode($json, http_response_code($json["status"]));

				return;
			}
		}

		/*=============================================
	Error cuando no envía token
	=============================================*/
	} else {

		$json = array(
			'status' => 400,
			'results' => "Error: Authorization required"
		);

		echo json_encode($json, http_response_code($json["status"]));

		return;
	}
}
