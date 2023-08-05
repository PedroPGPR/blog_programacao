<?php

    if(isset($rotas[3])){
        $post = $rotas[3];
    }else{
        $rotas[3] = 0;
        $post = $rotas[3];
    }

?>

<main>
    <div class="container">
        <div class="row m-5">
            <div class="col-12 d-flex flex-wrap flex-row justify-content-center">
                <img src="<?= $url_base; ?>/public/img/<?= $posts[$post]['img']; ?>" alt="ImagemPost" class="img-fluid rounded mx-auto d-block">
                <div class="col-9 text-center m-3 text-danger text-bold">
                    <h3><?= $posts[$post]['titulo']; ?></h3>
                    <h5><?= $posts[$post]['sub-titulo']; ?></h5>
                </div>
                <div class="col-11">
                    <p><?= $posts[$post]['descricao']; ?></p>
                </div>
            </div>
        </div>
    </div>
</main>