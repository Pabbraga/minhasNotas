<?php

class User {

    private $name;
    private $cpf;
    private $email;
    private $password;
    private $picture;
    

    public function getName() {
        return $this->name;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getPicture(){
        return $this->picture;
    }

    public function setName($v) {
        $this->name = $v;
    }

    public function setCpf($v) {
        $this->cpf = $v;
    }

    public function setEmail($v) {
        $this->email = $v;
    }
    
    public function setPassword($v) {
        $this->password = $v;
    }

    public function setPicture($v){
        $this->picture = $v;
    }
}