<?php 
    class Usuarios extends Controllers{
        public function __construct() {
            parent::__construct();
            // sessionStart();
            session_start();
            // if (empty($_SESSION['login'])) {
            //     header('Location:'.BASE_URL.'login');
            // }
        }
        public function setUser() {
            $name = strClean($_POST['name']);           
            $lastname = strClean($_POST['lastname']);
            $email = strClean($_POST['email']);
            $password = strClean($_POST['password']);
            $repeatPassword = strClean($_POST['repeatPassword']);
           
            if ($password != $repeatPassword) {
                $arrResponse = array('status' => false, 'msg' => 'Las contraseñas no coinciden');
            } else {
                if ($name == '' || $lastname == '' || $email == '' || $password == '') {
                    $arrResponse = array('status' => false, 'msg' => 'Se requiere llenar todos los campos');
                    return;
                } 
                // $arrResponse = [$name, $lastname, $email, $password, $repeatPassword];
                $arrData = $this->model->setUser($name, $lastname, $email, $password);

                if ($arrData == 'exist') {
                    $arrResponse = array('status' => false, 'msg' => '¡Este usuario ya existe!');
                } else if (!empty($arrData)) {
                    $arrResponse = array('status' => true, 'msg' => 'Operación exitosa!');
                } else{
                    $arrResponse = array('status' => false, 'msg' => 'Ha ocurrido un problema');
                }
            }

            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
        }
        public function login() {
            $email = strClean($_POST['email']);    
            $password = strClean($_POST['password']);    

            $passSHA256 = hash('SHA256', $password);
            $arrData = $this->model->setLogin($email, $passSHA256);
            
            if (!empty($arrData)) {
                $arrResponse = array('status' => true, 'msg' => 'Validación exitosa!');
                $_SESSION['nombre'] = $arrData[0]['name'] . ' ' . $arrData[0]['lastname'];
                $_SESSION['login'] = true;
            } else {
                $arrResponse = array('status' => false, 'msg' => 'Ha ocurido un error al iniciar sesión...');
            }

            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);

        }

    }