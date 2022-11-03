<?php
class User {

    private string $email = 'etec@email.com';
    private string $password = 'etec';
    
    public function getEmail() {
        return $this->email;
    }
    
    public function getPassword() {
        return $this->password;
    } 
}