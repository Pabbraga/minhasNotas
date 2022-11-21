<?php
$user = 'root';
$pass = 'etec';

$userData = [
    'name'=>'Pedro', 
    'email'=>'pedro@email.com', 
    'password'=>'pedro123', 
];

$dbh = new PDO('mysql:host=localhost;dbname=pw', $user, $pass);

//insert
$statement = $dbh->prepare("INSERT INTO user(name, email, password) VALUES(:name, :email, :password)");

$statement->bindParam(':name', $userData['name']);
$statement->bindParam(':email', $userData['email']);
$statement->bindParam(':password', $userData['password']);

$statement->execute();

//select
$statement = $dbh->prepare("SELECT * FROM user");
$statement->execute();

$users = $statement->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
var_dump($users);
echo "</pre>";

//update
$alterName = "João";
$id = 2;
$statement = $dbh->prepare("UPDATE user SET name = :name WHERE id = :id");

$statement->bindParam(':name', $alterName);
$statement->bindParam(':id', $id);

$statement->execute();

//delete
$deleteid = 3;

$statement = $dbh->prepare("DELETE FROM user WHERE id = :id");

$statement->bindParam(':id', $deleteid);
$statement->execute();