<?php

$users = [
    ['name'=>'Lúcia Giovanna', 'cpf'=>'26021609034', 'age'=>'20' ,'email'=>'luciagiovanna032@hotmail.com', 'password'=>'S4jABWCSY6', 'picture'=>'../assets/jovem-f.png'],
    ['name'=>'Rafaela Isabelle', 'cpf'=>'44021266577', 'age'=>'32' ,'email'=>'rafaelaisabelle45@hotmail.com', 'password'=>'rnJF0hAKDa', 'picture'=>'../assets/adulto-f.png'],
    ['name'=>'Luís Benjamin', 'cpf'=>'41663307806', 'age'=>'34' ,'email'=>'benjaminluis89@aspadvocacia.com', 'password'=>'4GwgmliI7O', 'picture'=>'../assets/adulto-m.png'],
    ['name'=>'Carlos Cardoso', 'cpf'=>'14357766745', 'age'=>'33' ,'email'=>'carloscardoso321@starmidia.tv', 'password'=>'fFUzKOxw49', 'picture'=>'../assets/adulto02-m.png'],
    ['name'=>'Erick Fogaça', 'cpf'=>'05589655390', 'age'=>'19' ,'email'=>'erickfogaca@oul.com.br', 'password'=>'F6Wxh9bCyW', 'picture'=>'../assets/jovem-m.png'],
];

foreach($users as $user) {
    $email_data = $user['email'];
    $password_data = $user['password'];
    $name_data = $user['name'];
    $age_data = $user['age'];
    $cpf_data = $user['cpf'];
    $photo_data = $user['picture'];
}