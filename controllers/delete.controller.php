<?php

/* Incluyendo el archivo delete.model.php. */
require_once "models/delete.model.php";

class DeleteController
{

	/*=============================================
	Peticion Delete para eliminar datos
	=============================================*/

	static public function deleteData($table, $id, $nameId)
	{

		/* Llamar al método deleteData de la clase DeleteModel. */
		$response = DeleteModel::deleteData($table, $id, $nameId);
		$return = new DeleteController();
		$return->fncResponse($response);
	}

	/*=============================================
	Respuestas del controlador
	=============================================*/

	/**
	 * Toma una respuesta de la base de datos y la devuelve como un objeto JSON
	 * 
	 * @param response La respuesta de la base de datos.
	 */
	public function fncResponse($response)
	{

		if (!empty($response)) {

			$json = array(

				'status' => 200,
				'results' => $response

			);
		} else {

			$json = array(

				'status' => 404,
				'results' => 'Not Found',
				'method' => 'delete'

			);
		}

		echo json_encode($json, http_response_code($json["status"]));
	}
}
