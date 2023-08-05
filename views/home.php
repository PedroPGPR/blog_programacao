<main>  
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <?php foreach($posts as $post): ?>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $post['id']; ?>" class="<?= ($post['id'] == 0) ? "active" : ""; ?>" aria-current="<?= ($post['id'] == 0) ? "true" : "false"; ?>" aria-label="Slide <?= ($post['id']+1); ?>"></button>
            <?php endforeach; ?>
        </div>
        <div class="carousel-inner">
            <?php foreach($posts as $post): ?>
                <div class="carousel-item <?= ($post['id'] == 0) ? "active" : ""; ?>">
                <img src="<?= $url_base; ?>public/img/<?= $post['img']; ?>" class="d-block w-100" alt="<?= $post['id']; ?>" id="carousel">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?= $post['titulo']; ?></h5>
                    <p><?= $post['sub-titulo']; ?></p>
                </div>
            </div>  
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container-fluid mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-12 text-center mb-5">
                <h1>Todos os nossos Posts</h1>
            </div>
            <div class="col-10 d-flex flex-row flex-wrap justify-content-center gap-4">
                <?php foreach($posts as $post): ?>
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $url_base; ?>public/img/<?= $post['img']; ?>" class="card-img-top" alt="<?= $post['id']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $post['titulo']; ?></h5>
                            <hr>
                            <p class="card-text"><?= mb_strimwidth($post['sub-titulo'], 0, 65, "..."); ?></p>
                            <a href="<?= $url_base; ?>postagem/<?= $post['id']; ?>" class="btn btn-dark" id="brn_card">Ler Artigo</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</main>