
<?php

class UsuariosController{

	/*=============================================
	Login de administradores
	=============================================*/
	public function crear(){
        if (isset($_POST["cedula"])) {
            require './variables_globales/variables.php';
            $url = "$tbl_users?select=$cedula_user_va,$email_user_va&linkTo=$cedula_user_va,$email_user_va&equalTo=".$_POST["cedula"].",".$_POST["email"];
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
                    $url = "$tbl_users?select=$cedula_user_va&linkTo=$cedula_user_va&equalTo=".$_POST["cedula"];
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
                        $url = "$tbl_users?select=$email_user_va&linkTo=$email_user_va&equalTo=".$_POST["email"];
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
                                $cedula_user_va          =>$_POST["cedula"],
                                $nombre_user_va          => $_POST["nombre"],
                                $apellidos_user_va       => $_POST["apellido"],
                                $rol_id_user_va          => $_POST["rol"],
                                $password_user_va        => $_POST["pass"],
                                $email_user_va           => $_POST["email"],
                                $estado_user_va          => $_POST["estado"]

                            );
                            $url = "$tbl_users?token=".$_SESSION["admin"]->token_user."&table=$tbl_users&suffix=user";
                            $method = "POST";
                            $fields = $data;
                            $response = CurlController::request($url,$method,$fields);
                            echo '<pre>'; print_r($response); echo '</pre>';
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