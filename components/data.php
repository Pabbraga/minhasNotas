<?php

class Data{

    private $dbh;

    public function __construct($user, $pass) {
        $this->dbh = new PDO('mysql:host=localhost;dbname=pw', $user, $pass);
    }

    public function selectData($tb) {
        
        $statement = $this->dbh->prepare("select * from $tb"); 

        $statement->execute();

        $users = $statement->fetchAll(PDO::FETCH_ASSOC); 
        return $users;
    }

    public function insertData($name, $email, $pass) {
        $statement = $this->dbh->prepare("INSERT INTO user(name, email, password) VALUES(:name, :email, :password)");
        
        $statement->bindParam(':name', $name);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':password', $pass);

        $statement->execute();
    }

    public function updateData($column, $id, $update) {
        $statement = $this->dbh->prepare("UPDATE user set {$column} = :{$column} WHERE id = :id");

        $statement->bindParam(':id', $id);
        $statement->bindParam(":{$column}", $update);
    }

    public function deleteData($id) {
        $statement = $this->dbh->prepare("DELETE FROM user WHERE id = :id");

        $statement->bindParam(':id', $id);
        $statement->execute();
    }
}

$dt = new Data('root', 'etec');
#$dt->insertData('Paulo', 'paulo@email.com', 'paulo123');
#$dt->updateData('name', 3 ,'Claudio');
#$dt->deleteData(3);
print_r($dt->selectData('user'));