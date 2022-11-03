<?php

require_once './classes/post.php';
require_once './classes/user.php';
require_once './classes/session.php';

$post = new Post();
$user = new User();

if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = $post->get('email');
    $pass = $post->get('password');

    if($email == $user->getEmail() && $pass == $user->getPassword()) {
        $_SESSION['acesso'] = $user->getEmail();
    }
}