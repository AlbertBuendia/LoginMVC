<?php
    class User {
    //atributos
    private $id_user;
    private $email_user;
    private $passwd;
    //constructor
    public function __construct($email,$passwd) {
        $this->email=$email;
        $this->passwd=$passwd;
    }
    //metodos getters(devolver) y setters(meter)
    public function getEmail(){
        return $this->email;
    }
    public function getPasswd(){
        return $this->passwd;
    }
}
?>