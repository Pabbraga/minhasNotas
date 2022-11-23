<?php

class Data{

    private $connection;

    public function __construct($user, $pass) {
        $this->connection = new PDO('mysql:host=localhost;dbname=pw', $user, $pass);
    }

    public function dispatch() {

    }

    public function selectData($table, $fields = '*', $condition = null) {

        $querry = 'SELECT ' . $fields . ' FROM ' . $table;

        if($condition != null) {
            foreach($condition as $column => $value) {
                $conditions[] = "$column = '$value'";
            }
            $conditions = implode(' AND ', $conditions);

            $querry .= ' WHERE ' . $conditions;
        }

        $statement = $this->connection->prepare($querry); 

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertData($name, $cpf, $email, $pass, $pic) {
        
        $querry = 'INSERT INTO ' . '' . 'VALUES';
        
        $statement = $this->connection->prepare("INSERT INTO user(name, cpf, email, password, picture) VALUES(:name, :cpf, :email, :password, :picture)");
        
        $statement->bindParam(':name', $name);
        $statement->bindParam(':cpf', $cpf);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':password', $pass);
        $statement->bindParam(':picture', $pic);

        $statement->execute();
    }

    public function updateData($column, $id, $update) {
        $statement = $this->connection->prepare("UPDATE user set $column = :$column WHERE id = :id");

        $statement->bindParam(':id', $id);
        $statement->bindParam(":$column", $update);

        $statement->execute();
    }

    public function deleteData($id) {
        $statement = $this->connection->prepare("DELETE FROM user WHERE id = :id");

        $statement->bindParam(':id', $id);
        $statement->execute();
    }
}

#$dt = new Data('root', 'etec');
#$dt->insertData('Lúcia Giovanna', '26021609034', 'luciagiovanna032@hotmail.com', 'lucia123', '../assets/jovem-f.png');
#$dt->updateData('password', 2 ,'claudio123');
#$dt->deleteData(3);
#print_r($dt->selectData('user'));