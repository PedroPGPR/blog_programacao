<?php

    require_once("required.php");

?>

<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="<?= $url_base; ?>/public/css/style.css"> <!-- Estilo do projeto -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet"> <!-- Google Fonts -->
        <title>Blog Programação</title>
    </head>

<body>
    <header>
        <nav class="navbar navbar-brand navbar-expand-sm bg-body-tertiary">
            <div class="container-fluid">
                <a href="<?= $url_base; ?>" class="navbar-brand pe-3 mx--md-auto">
                    <img src="<?= $url_base; ?>public/img/logo.svg" alt="Blog Logo" id="svg">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#esconder" aria-controls="esconder" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> 
                <div class="collapse navbar-collapse d-md-flex justify-content-center" id="esconder">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?= ($rotas[2] == "home" || $rotas[2] == null) ? "active" : "" ?>" aria-current="page" href="<?= $url_base; ?>">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?= ($rotas[2] == "postagem") ? "active" : "" ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Artigos
                            </a>
                            <ul class="dropdown-menu p-0">
                                <?php foreach($posts as $post): ?>
                                    <li><a class="dropdown-item <?= ($rotas[3] == $post['id'] && isset($rotas[3])) ? "active" : ""; ?>" href="<?= $url_base; ?>postagem/<?= $post['id']; ?>"><?= $post['titulo'] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($rotas[2] == "sobre") ? "active" : "" ?>" href="<?= $url_base; ?>sobre">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($rotas[2] == "contactos") ? "active" : "" ?>" href="<?= $url_base; ?>contactos">Contactos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>