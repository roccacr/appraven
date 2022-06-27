
<?php

class PermisosController{

	/*=============================================
	Login de administradores
	=============================================*/
	public function crear(){
        if (isset($_POST["agregarpermisos"])) {
            require './variables_globales/variables.php';
            $value1 = isset($_POST['consultarFacturas']) ? "checked" : "unchecked";
			$value2 = isset($_POST['consultarUsuarios']) ? "checked" : "unchecked";
			$value3 = isset($_POST['crearUsuarios']) ? "checked" : "unchecked";
			$value4 = isset($_POST['crearPermisos']) ? "checked" : "unchecked";
			$value5 = isset($_POST['editarUsuario']) ? "checked" : "unchecked";
            if ($value1 === "checked") {
				$value1 = 1;
			} else {
				$value1 = 0;
			}
			if ($value2 === "checked") {
				$value2 = 1;
			} else {
				$value2 = 0;
			}
			if ($value3 === "checked") {
				$value3 = 1;
			} else {
				$value3 = 0;
			}
			if ($value4 === "checked") {
				$value4 = 1;
			} else {
				$value4 = 0;
			}
			if ($value5 === "checked") {
				$value5 = 1;
			} else {
				$value5 = 0;
			}
            $select = "*";
			$url = "$tbl_permisos?select=" . $select . "&linkTo=$id_user_permiso_va&equalTo=" . $_POST['id_user'];
			$method = "GET";
			$fields = array();
			$response = CurlController::request($url, $method, $fields);
            if ($response->status == 200) {
				echo '<div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Lo sentimos</h4>
                <div class="alert-body">
                Lo sentimos, el usuario ya tiene permisos:  Favor vuelva a intentarlo.
                </div>
              </div>';
			} else {
                $data = array(
					$consultarUsuarios_permiso_va => $value2,
					$consultarFacturas_permiso_va => $value1,
					$crearUsuario_permiso_va      => $value3,
					$crearPermisos_permiso_va     => $value4,
					$editarUsuarios_permiso_va    => $value5,
                    $id_user_permiso_va           => $_POST['id_user']
				);
                $url = "$tbl_permisos?token=" . $_SESSION["admin"]->$token_user_va . "&table=$tbl_users&suffix=$suffix_users";
				$method = "POST";
				$fields = $data;
				$response = CurlController::request($url, $method, $fields);
				if ($response->status == 200) {
                    echo '<div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Exelente</h4>
                    <div class="alert-body">
                     Se crearon los permisos para este usuario
                    </div>
                  </div>';
				} else {
					echo '<div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Lo sentimos</h4>
                        <div class="alert-body">
                        Lo sentimos no se pudo crear los permisos  Favor vuelva a intentarlo.
                        </div>
                    </div>';
				}
            }
        }
    }


   /*=============================================
	Login de administradores
	=============================================*/
	public function editar($id){

        if (isset($_POST["editar_permisos"])) {
            if ($id == $_POST["id_user"]) {
                require './variables_globales/variables.php';
				$select = "*";
				$url = "$tbl_permisos?select=" . $select . "&linkTo=$id_user_permiso_va&equalTo=" . $id;
				$method = "GET";
				$fields = array();
				$response = CurlController::request($url, $method, $fields);
                if ($response->status == 200) {
                    $value1 = isset($_POST['editar_consultarFacturas']) ? "checked" : "unchecked";
                    $value2 = isset($_POST['editar_consultarUsuarios']) ? "checked" : "unchecked";
                    $value3 = isset($_POST['editar_crearUsuarios']) ? "checked" : "unchecked";
                    $value4 = isset($_POST['editar_crearPermisos']) ? "checked" : "unchecked";
                    $value5 = isset($_POST['editar_editarUsuario']) ? "checked" : "unchecked";
                    if ($value1 === "checked") {
                        $value1 = 1;
                    } else {
                        $value1 = 0;
                    }
                    if ($value2 === "checked") {
                        $value2 = 1;
                    } else {
                        $value2 = 0;
                    }
                    if ($value3 === "checked") {
                        $value3 = 1;
                    } else {
                        $value3 = 0;
                    }
                    if ($value4 === "checked") {
                        $value4 = 1;
                    } else {
                        $value4 = 0;
                    }
                    if ($value5 === "checked") {
                        $value5 = 1;
                    } else {
                        $value5 = 0;
                    }
                    $data = $consultarUsuarios_permiso_va."=".$value2."
					&".$consultarFacturas_permiso_va."=". $value1."
					&".$crearUsuario_permiso_va."=".$value3."
					&".$crearPermisos_permiso_va."=".$value4."
					&".$editarUsuarios_permiso_va."=".$value5."
					&".$id_user_permiso_va."=".$id;
					$url = "$tbl_permisos?id=".$_POST['id_user']."&nameId=$id_user_permiso_va&token=".$_SESSION["admin"]->$token_user_va."&table=$tbl_users&suffix=$suffix_users";
                    $method = "PUT";
					$fields = $data;
					$response = CurlController::request($url,$method,$fields);
                    if($response->status == 200){
                        echo '<div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Exelente</h4>
                        <div class="alert-body">
                         Se editaron los permisos para este usuario
                        </div>
                      </div>';

					}else{
                        echo '<div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Lo sentimos</h4>
                        <div class="alert-body">
                        Lo sentimos no se pudo editar los permisos
                        </div>
                    </div>';
					}

                }else{
                    echo '<div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Lo sentimos</h4>
                        <div class="alert-body">
                        Lo sentimos no se pudo editar los permisos  Favor vuelva a intentarlo.
                        </div>
                    </div>';
                }
            }
        }
    }
}