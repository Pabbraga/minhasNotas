<?php
    require_once '../components/post.php';
    $post = new Post();
    if(isset($_POST['content'])) {
        $content = $post->get('content');
    } else {
        echo "preencha os dados!";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/index.css">
    <title>Anotações</title>
</head>
<body>
    <section class='notes'>
        <h1>Minhas Anotações</h1>
        <p><?php echo $content; ?></p>
    </section>
</body>
</html>