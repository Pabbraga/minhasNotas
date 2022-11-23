<?php

require_once '../components/post.php';
require_once '../components/user.php';
require_once '../components/session.php';
require_once '../components/database.php';
require './config.php';

$session = new Session();
$post = new Post();
$user = new User();
$dt = new DataBase($config);

if(isset($_POST['email']) && isset($_POST['password']) && $_POST['email'] != '' && $_POST['password'] != '') {
    $email = $post->get('email');
    $pass = $post->get('password');

    $userData = $dt->selectData('user');
    if($email == $userData['email'] && $pass == $userData['password']){
        $user->setName($userData['name']);
        $user->setCpf($userData['cpf']);
        $user->setEmail($userData['email']);
        $user->setPassword($userData['password']);
        $user->setPicture($userData['picture']);
    }
    
    if($email == $user->getEmail() && $pass == $user->getPassword()) {
        $_SESSION['user'] = $user->getEmail();
        include '../pages/main.php';
    } else {
        echo 'dados incorretos e/ou inválidos!';
    }
} else {
    echo 'dados não foram preenchidos!';
}