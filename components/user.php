<?php

class User {

    private $email;
    private $password;
    private $name;
    private $age;
    private $cpf;
    private $picture;
    
    public function getEmail() {
        return $this->email;
    }
    
    public function getPassword() {
        return $this->password;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getPicture(){
        return $this->picture;
    }

    public function setEmail($v) {
        $this->email = $v;
    }
    
    public function setPassword($v) {
        $this->password = $v;
    }

    public function setName($v) {
        $this->name = $v;
    }

    public function setAge($v) {
        $this->age = $v;
    }

    public function setCpf($v) {
        $this->cpf = $v;
    }

    public function setPicture($v){
        $this->picture = $v;
    }
}