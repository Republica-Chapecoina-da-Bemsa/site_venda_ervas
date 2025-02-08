<?php 
include "../base/header.php";
include "../admin/db.class.php";

    $db = new db("post");
    $db->checkLogin();
    $posts = $db->all();
    ?>
<div class="container mt-5 mr-4 ml-4">
        <div class="row gap-1">
            <aside class="col-2 mr-0">
                <div class="position-sticky mt-2 top-0">
                    <h2 class="lead fst-italic">Escritores:</h2>

                    <div class="card mb-3 border-dark">

                        <div class="card-body">
                            <h5 class="card-title fw-bold">Lucas</h5>
                            <p class="card-text"><small class="text-body-secondary">
                                    lead-in to additional content. This content is a little bit longer.
                                    This is a wider card with supporting text below as a natural
                                </small>
                            </p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>

                    </div>


                    <div class="card mb-3 border-dark">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Giselly</h5>
                            <p class="card-text"><small class="text-body-secondary">
                                    lead-in to additional content. This content is a little bit longer.
                                    This is a wider card with supporting text below as a natural
                                </small>
                            </p>
                            <p class="card-text"><small class="text-muted">Last updated 12 mins ago</small>
                            </p>
                        </div>

                    </div>

                </div>

            </aside>
            <div class="col-9">
                <h2 class="pb-4 mb-4 fst-italic border-botton">BLOG HERABAE</h2>

                <?php foreach ($posts as $post): ?>
                <article class="blog-post mb-3">
                    <h2 class="blog-post-title border-bottom border-secondary"><?php echo htmlspecialchars($post->name); ?></h2>
                    <p class="blog-post-category"><strong>Categoria:</strong> <?php echo htmlspecialchars($post->category); ?></p>
                    <p style="text-align:justify"><?php echo nl2br(htmlspecialchars($post->description)); ?></p>
                <p class="blog-post-meta"><?php echo htmlspecialchars($post->date); ?> por <a href="#"><?php echo htmlspecialchars($post->author); ?></a></p>
                </article>
                <?php endforeach; ?>

                <div class="input-group gap-2 mt-5 mb-5">
                    <button class="rounded-5 btn btn-outline-success" href="#">Antigos</button>
                    <button class="rounded-5 btn btn-outline-secondary" disabled href="#">Novos</button>
                </div>
            </div>

        </div>
<?php include "../base/footer.php";?>
