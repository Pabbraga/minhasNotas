<?php
require_once '../script/login.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
    <section><img src="<?php echo $user->getPicture(); ?>" alt=""></section>
    <section>
        <p>Nome: <?php echo $user->getName(); ?></p>
        <p>E-mail: <?php echo $user->getEmail(); ?></p>
        <p>CPF: <?php echo $user->getCpf(); ?></p>
    </section>
    <section>
        <form action="" method="post">
            <textarea name='content' rows='5' cols='50' id='' maxlength='400' style='resize: none;'></textarea>
        </form>
    </section>
</body>
</html>