
<?php

class UsuariosController{

	/*=============================================
	Login de administradores
	=============================================*/
	public function crear(){
       
  

        if (isset($_POST["cedula"])) {

            $url = "users?select=cedula_user,email_user&linkTo=cedula_user,email_user&equalTo=".$_POST["cedula"].",".$_POST["email"];
            $method = "GET";
            $fields = array();
            $response = CurlController::request($url,$method,$fields);
            if($response->status == 200){
                echo '<div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Lo sentimos</h4>
                <div class="alert-body">
                Lo sentimos, el usuario ya existe en el sistema con la cedula: '.$_POST["cedula"].' Y el Correo: '.$_POST["email"]. ' Favor vuelva a intentarlo.
                </div>
              </div>';
            }else{
                    $url = "users?select=cedula_user&linkTo=cedula_user&equalTo=".$_POST["cedula"];
                    $method = "GET";
                    $fields = array();
                    $response = CurlController::request($url,$method,$fields);
                    if($response->status == 200){
                        echo '<div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Lo sentimos</h4>
                        <div class="alert-body">
                        Lo sentimos, el usuario ya existe en el sistema con la cedula: '.$_POST["cedula"].' Favor vuelva a intentarlo.
                        </div>
                      </div>';
                    }else{
                        $url = "users?select=email_user&linkTo=email_user&equalTo=".$_POST["email"];
                        $method = "GET";
                        $fields = array();
                        $response = CurlController::request($url,$method,$fields);
                        if($response->status == 200){
                            echo '<div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">Lo sentimos</h4>
                            <div class="alert-body">
                            Lo sentimos, el usuario ya existe en el sistema con el Correo: '.$_POST["email"]. ' Favor vuelva a intentarlo.
                            </div>
                          </div>';
                        }else{
                            $data = array(
                                "cedula_user"          =>$_POST["cedula"],
                                "nombre_user"       => $_POST["nombre"],
                                "apellidos_user"        => $_POST["apellido"],
                                "rol_id_user"         => $_POST["rol"],
                                "password_user"         => $_POST["pass"],
                                "email_user"         => $_POST["email"],
                                "estado_user"         => $_POST["estado"]

                            );
                            $url = "users?token=".$_SESSION["admin"]->token_user."&table=users&suffix=user";
                            $method = "POST";
                            $fields = $data;
                            $response = CurlController::request($url,$method,$fields);
                            if($response->status == 200){
                                echo '<div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Exelente</h4>
                                <div class="alert-body">
                                 Se creo un nuevo usuario Nombre: '.$_POST["nombre"].' '.$_POST["apellido"].'
                                </div>
                              </div>';
                            }else{
                                echo '<div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading">Lo sentimos</h4>
                                <div class="alert-body">
                                No se pudo crear el usuario, favor revisar los campos, he inténtelo de nuevo
                                </div>
                              </div>';
                            }
                        }
                    }
            }
        }else{
         
        }

    }
}