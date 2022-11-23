<?php

require_once '../components/post.php';
require_once '../components/user.php';
require_once '../components/session.php';
require_once '../components/data.php';

$session = new Session();
$post = new Post();
$user = new User();
$dt = new Data('root', 'etec');

if(isset($_POST['email']) && isset($_POST['password']) && $_POST['email'] != '' && $_POST['password'] != '') {
    $email = $post->get('email');
    $pass = $post->get('password');


    foreach($dt as $data) {
        if($email == $data['email'] && $pass == $data['password']){
            $user->setName($data['name']);
            $user->setCpf($data['cpf']);
            $user->setEmail($data['email']);
            $user->setPassword($data['password']);
            $user->setPicture($data['picture']);
        }
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