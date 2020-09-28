<?php

class User {
    //Atributos
    private $id_user;
    private $email;
    private $password;

    //Contructor
    public function __construct($email, $password) {
        $this -> email = $email;
        $this -> password = $password;
    }

    //Getters and Setters
    public function getId_user() {
        return $this->id_user;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getPassword() {
        return $this->password;
    }

    public function setId_user($id_user) {
        $this->id_user = $id_user;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
}

?>