<?php
require_once '../script/login.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/profile.css">
    <title>Perfil</title>
</head>
<body>
    <section class='profile'>
        <img src="<?php echo $user->getPicture(); ?>" class='picture' alt="imagem do usuário">
        <div class='info'>
            <p>Nome: <?php echo $user->getName(); ?></p>
            <p>E-mail: <?php echo $user->getEmail(); ?></p>
            <p>CPF: <?php echo $user->getCpf(); ?></p>
        </div>
    </section>
    <div class='feed'>
        <form action="../pages/notes.php" method="post">
            <p>Bloco de Notas</p>
            <textarea name='content' rows='12' cols='75' maxlength='800' style='resize: none;'></textarea>
            <input type="submit" name="Salvar" class='button'>
        </form>
    </div>
</body>
</html>