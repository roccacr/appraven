<?php

class AdminsController{

	/*=============================================
	Login de administradores
	=============================================*/
	public function login(){
        if(isset($_POST["loginEmail"])){
	       /*=============================================
			Validamos la sintaxis de los campos
			=============================================*/	

			if(preg_match('/^[.a-zA-Z0-9_]+([.][.a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["loginEmail"] )){
                require './variables_globales/variables.php';
                $url = "$tbl_users?login=true&suffix=$suffix_users";
				$method = "POST";
				$fields = array(
					"$email_user_va" => $_POST["loginEmail"],
					"$password_user_va" => $_POST["loginPassword"]
				);
				$response = CurlController::request($url,$method,$fields);
                /*=============================================
				Validamos que si escriba correctamente los datos
				=============================================*/	
				if($response->status == 200){
                    /*=============================================
					Validamos que si tenga rol administrativo
					=============================================*/	
					if($response->results[0]->$estado_user_va !="$estado"){
                        echo '<div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">Algo salio mal!!</h4>
                            <div class="alert-body">
                            No tienes permisos para acceder, cuenta inactiva.
                            </div>
                        </div>';
                        return;
					}
                    /*=============================================
					Creamos variable de sesión
					=============================================*/	
					$_SESSION["admin"] = $response->results[0];
					echo '<script>
					window.location = "'.$_SERVER["REQUEST_URI"].'"
					</script>';
                }else{
                    echo '<div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Algo salio mal!!</h4>
                    <div class="alert-body">
                       '.$response->results.'
                    </div>
                  </div>';

                }
            }else{
                echo '<div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Campo invalidó</h4>
                <div class="alert-body">
                  Verificar el formato del correo
                </div>
              </div>';
            }
        }
    }
}