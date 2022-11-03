<?php

require_once '../components/post.php';
require_once '../components/user.php';
require_once '../components/session.php';
require_once '../script/userdata.php';

$session = new Session();
$post = new Post();
$user = new User();

if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = $post->get('email');
    $pass = $post->get('password');

    if($email == $user->getEmail() && $pass == $user->getPassword()) {
        $_SESSION['user'] = $user->getEmail();
        include '../library/main.html';
    } else {
        echo 'dados incorretos e/ou inválidos!';
    }
} else {
    echo 'dados não foram preenchidos!';
}