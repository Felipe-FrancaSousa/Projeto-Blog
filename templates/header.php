<?php
    /* helper do link do servidor */
    include_once("helpers/url.php");
    include_once("data/posts.php");
    include_once("data/categories.php");
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sacele-1.0">
    <title>Blog</title>
<!-- Folha de estilo -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/CSS/estilo.css">
<!-- Links direto do google fonts para a fonte da página funcionar sem problemas -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>


<body>
    <header>
        <a href="<?= $BASE_URL?>/index.php" id="logo"><img src="<?= $BASE_URL?>/img/logo.svg" alt="Logo do Blog"></a>
<!-- Barra de navegação do topo do site -->
        <nav>
            <ul id="navbar">
                <li><a href="<?= $BASE_URL?>" class="nav-link">Home</a></li>
                <li><a href="<?= $BASE_URL?>/categorias.php" class="nav-link">Categorias</a></li>
                <li><a href="<?= $BASE_URL?>/sobre.php" class="nav-link">Sobre</a></li>
                <li><a href="<?= $BASE_URL?>/contato.php" class="nav-link">Contato</a></li>
            </ul>
        </nav>
    </header>
