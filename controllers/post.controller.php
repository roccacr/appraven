<?php 

/* Incluyendo el archivo `get.model.php` en el archivo actual. */
require_once "models/get.model.php";
/* Incluyendo el archivo `post.model.php` en el archivo actual. */
require_once "models/post.model.php";
/* Incluyendo el archivo `connection.php` en el archivo actual. */
require_once "models/connection.php";

/* Cargando el autocargador del compositor. */
require_once "vendor/autoload.php";
/* Importación de la clase JWT de la biblioteca Firebase JWT. */
use Firebase\JWT\JWT;

/* Incluyendo el archivo `put.model.php` en el archivo actual. */
require_once "models/put.model.php";

class PostController{

	/*=============================================
	Peticion POST para crear datos
	=============================================*/

	/* Un método que se llama cuando desea crear un nuevo registro en la base de datos. */
	static public function postData($table, $data){

		$response = PostModel::postData($table, $data);
		
		$return = new PostController();
		$return -> fncResponse($response,null,null);

	}

	/*=============================================
	Peticion POST para registrar usuario
	=============================================*/
    /* Este método se utiliza para registrar un usuario en la base de datos. */
	static public function postRegister($table, $data, $suffix){

		/* Esto es verificar si la contraseña está configurada y si no es nula. */
		if(isset($data["password_".$suffix]) && $data["password_".$suffix] != null){

			/* Cifrado de la contraseña. */
			$crypt = crypt($data["password_".$suffix], '$2a$07$azybxcags23425sdg23sdfhsd$');
/* Cifrado de la contraseña. */

			$data["password_".$suffix] = $crypt;

			/* Llamar al método `postData` desde la clase `PostModel`. */
			$response = PostModel::postData($table, $data);

			/* Creando una nueva instancia de la clase PostController. */
			$return = new PostController();
			/* Llamar al método `fncResponse` desde la clase `PostController`. */
			$return -> fncResponse($response,null,$suffix);

		}else{

			/*=============================================
			Registro de usuarios desde APP externas
			=============================================*/

			/* Llamar al método `postData` desde la clase `PostModel`. */
			$response = PostModel::postData($table, $data);

			/* Esto es verificar si la respuesta no está vacía y si la respuesta no es nula. */
			if(isset($response["comment"]) && $response["comment"] == "The process was successful" ){

				/*=============================================
				Validar que el usuario exista en BD
				=============================================*/

				/* Este es un método que se utiliza para obtener datos de la base de datos. */
				$response = GetModel::getDataFilter($table, "*", "email_".$suffix, $data["email_".$suffix], null,null,null,null);
				
				/* Comprobando si la respuesta no está vacía. */
				if(!empty($response)){		

					/* Este es un método que se utiliza para generar un token para el usuario. */
					$token = Connection::jwt($response[0]->{"id_".$suffix}, $response[0]->{"email_".$suffix});

				/* Este es un método que se utiliza para generar un token para el usuario. */
					$jwt = JWT::encode($token, "dfhsdfg34dfchs4xgsrsdry46");

					/*=============================================
					Actualizamos la base de datos con el Token del usuario
					=============================================*/

					/* Esta es una matriz que se usa para almacenar el token y la fecha de vencimiento del token. */
					$data = array(

						"token_".$suffix => $jwt,
						"token_exp_".$suffix => $token["exp"]

					);

					/* Este es un método que se utiliza para actualizar la base de datos con el token del usuario. */
					$update = PutModel::putData($table, $data, $response[0]->{"id_".$suffix}, "id_".$suffix);

					/* Esta es una declaración condicional que verifica si la variable `` está configurada y si
					la variable `` es igual a `El proceso fue exitoso`. Si la condición es verdadera,
					entonces la variable `[0]->{"token_".}` se asigna a la variable `` y
					`[0]->{"token_exp_". La variable }` se asigna a la variable `["exp"]`.
					Luego, se crea una nueva instancia de la clase `PostController` y se llama al método
					`fncResponse` desde la clase `PostController`. */
					if(isset($update["comment"]) && $update["comment"] == "The process was successful" ){

						$response[0]->{"token_".$suffix} = $jwt;
						$response[0]->{"token_exp_".$suffix} = $token["exp"];

						$return = new PostController();
						$return -> fncResponse($response, null,$suffix);

					}

				}


			}


		}

	}

	/*=============================================
	Peticion POST para login de usuario
	=============================================*/

	static public function postLogin($table, $data, $suffix){

		/*=============================================
		Validar que el usuario exista en BD
		=============================================*/

		/* Este es un método que se utiliza para obtener datos de la base de datos. */
		$response = GetModel::getDataFilter($table, "*", "email_".$suffix, $data["email_".$suffix], null,null,null,null);
		
		if(!empty($response)){	

			/* Esto es verificar si la contraseña está configurada y si la contraseña no es nula. */
			if($response[0]->{"password_".$suffix} != null)	{
			
				/*=============================================
				Encriptamos la contraseña
				=============================================*/
/* Este es un método que se utiliza para cifrar la contraseña. */

				$crypt = crypt($data["password_".$suffix], '$2a$07$azybxcags23425sdg23sdfhsd$');

				if($response[0]->{"password_".$suffix} == $crypt){

					/* Este es un método que se utiliza para generar un token para el usuario. */
					$token = Connection::jwt($response[0]->{"id_".$suffix}, $response[0]->{"email_".$suffix});

					$jwt = JWT::encode($token, "dfhsdfg34dfchs4xgsrsdry46");

					/*=============================================
					Actualizamos la base de datos con el Token del usuario
					=============================================*/

					$data = array(

						"token_".$suffix => $jwt,
						"token_exp_".$suffix => $token["exp"]

					);

					$update = PutModel::putData($table, $data, $response[0]->{"id_".$suffix}, "id_".$suffix);

					if(isset($update["comment"]) && $update["comment"] == "The process was successful" ){

						$response[0]->{"token_".$suffix} = $jwt;
						$response[0]->{"token_exp_".$suffix} = $token["exp"];

						$return = new PostController();
						$return -> fncResponse($response, null,$suffix);

					}
					
					
				}else{

					$response = null;
					$return = new PostController();
					$return -> fncResponse($response, "Wrong password",$suffix);

				}

			}else{

				/*=============================================
				Actualizamos el token para usuarios logueados desde app externas
				=============================================*/

				$token = Connection::jwt($response[0]->{"id_".$suffix}, $response[0]->{"email_".$suffix});

				$jwt = JWT::encode($token, "dfhsdfg34dfchs4xgsrsdry46");				

				$data = array(

					"token_".$suffix => $jwt,
					"token_exp_".$suffix => $token["exp"]

				);

				$update = PutModel::putData($table, $data, $response[0]->{"id_".$suffix}, "id_".$suffix);

				if(isset($update["comment"]) && $update["comment"] == "The process was successful" ){

					$response[0]->{"token_".$suffix} = $jwt;
					$response[0]->{"token_exp_".$suffix} = $token["exp"];

					$return = new PostController();
					$return -> fncResponse($response, null,$suffix);

				}

			}

		}else{

			$response = null;
			$return = new PostController();
			$return -> fncResponse($response, "Wrong email",$suffix);

		}


	}

	/*=============================================
	Respuestas del controlador
	=============================================*/

	public function fncResponse($response,$error,$suffix){

		if(!empty($response)){

			/*=============================================
			Quitamos la contraseña de la respuesta
			=============================================*/

			if(isset($response[0]->{"password_".$suffix})){

				unset($response[0]->{"password_".$suffix});

			}

			$json = array(

				'status' => 200,
				'results' => $response

			);

		}else{

			if($error != null){

				$json = array(
					'status' => 400,
					"results" => $error
				);

			}else{

				$json = array(

					'status' => 404,
					'results' => 'Not Found',
					'method' => 'post'

				);
			}

		}

		echo json_encode($json, http_response_code($json["status"]));

	}

}