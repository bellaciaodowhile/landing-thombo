<?php 
    class UsuariosModel extends MySql{
        public function __construct() {
            parent::__construct();
        }
        public function setUser($name, $lastname, $email, $password) {

            $return;
            $s = "SELECT * FROM users WHERE email = '$email'";
            $q = $this->select($s);
            if (!empty($q)) {
                $return = 'exist';
            } else {
                $passSHA256 = hash('SHA256', $password);
                $sql = "INSERT INTO users (`name`, lastname, email, `password`) VALUES (?,?,?,?)";
                $arrData = array($name, $lastname, $email, $passSHA256);
                $qInsert = $this->insert($sql, $arrData);
                $return = $qInsert;
            }
            return $return;
        }
        public function setLogin($email, $password) {
            $s = "SELECT * FROM users WHERE email = '$email' AND `password` = '$password'";
            $q = $this->selectAll($s);
            return $q;
        }
    }
