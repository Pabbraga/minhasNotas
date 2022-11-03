<?php

class User {

    private $email;
    private $password;
    private $name;
    private $age;
    private $cpf;
    
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

}