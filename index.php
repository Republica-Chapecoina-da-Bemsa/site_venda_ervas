<?php

include "./php/base/header.php";
include "./php/admin/db.class.php";

    $db = new db("user");
    $db->checkLogin();
?>

<div class="row mb-5">
            <div class="col-12">
                <!-- StartSlides -->
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/menta.jpg" class="d-block w-100" style="max-height: 400px;" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/lavanda.jpg" class="d-block w-100" style="max-height: 400px;" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/alecrim.jpg" class="d-block w-100" style="max-height: 400px;" alt="...">

                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- EndSlides -->
            </div>
        </div>
        <div class="row">
            <aside class="col-8">
                <!-- FAQ -->
                <h3 class="pb-2 mb-4 fst-italic border-bottom border-secondary">FAQ</h3>
                <div class="justify-content-evenly">

                    <div class="accordion accordion-flush" id="a1">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse1" aria-expanded="false"
                                    aria-controls="flush-collapse1">
                                    Todas as plantas são comestíveis?
                                </button>
                            </h2>
                            <div id="flush-collapse1" class="accordion-collapse collapse" data-bs-parent="#a1">
                                <div class="accordion-body">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel non incidunt ducimus
                                    sunt
                                    eveniet officia, corrupti laboriosam repudiandae quae reiciendis facilis possimus
                                    quam
                                    nostrum enim ut, expedita error nam? Adipisci?
                                </div>
                            </div>


                        </div>
                        <div class="accordion-item  mt-2">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse2" aria-expanded="false"
                                    aria-controls="flush-collapse2">
                                    Sou alérgico, o que faço?
                                </button>
                            </h2>
                            <div id="flush-collapse2" class="accordion-collapse collapse" data-bs-parent="#a1">
                                <div class="accordion-body">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel non incidunt ducimus
                                    sunt
                                    eveniet officia, corrupti laboriosam repudiandae quae reiciendis facilis possimus
                                    quam
                                    nostrum enim ut, expedita error nam? Adipisci?
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mt-2">
                            <h2 class="accordion-header ">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse3" aria-expanded="false"
                                    aria-controls="flush-collapse3">
                                    Onde comprar?
                                </button>
                            </h2>
                            <div id="flush-collapse3" class="accordion-collapse collapse" data-bs-parent="#a1">
                                <div class="accordion-body">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel non incidunt ducimus
                                    sunt
                                    eveniet officia, corrupti laboriosam repudiandae quae reiciendis facilis possimus
                                    quam
                                    nostrum enim ut, expedita error nam? Adipisci?
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item  mt-2">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse4" aria-expanded="false"
                                    aria-controls="flush-collapse4">
                                    Quais dessas plantas são medicinais?
                                </button>
                            </h2>
                            <div id="flush-collapse4" class="accordion-collapse collapse" data-bs-parent="#a1">
                                <div class="accordion-body">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel non incidunt ducimus
                                    sunt
                                    eveniet officia, corrupti laboriosam repudiandae quae reiciendis facilis possimus
                                    quam
                                    nostrum enim ut, expedita error nam? Adipisci?
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item  mt-2">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse5" aria-expanded="false"
                                    aria-controls="flush-collapse5">
                                    Quais os benefícios das plantas medicinais?
                                </button>
                            </h2>
                            <div id="flush-collapse5" class="accordion-collapse collapse" data-bs-parent="#a1">
                                <div class="accordion-body">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel non incidunt ducimus
                                    sunt
                                    eveniet officia, corrupti laboriosam repudiandae quae reiciendis facilis possimus
                                    quam
                                    nostrum enim ut, expedita error nam? Adipisci?
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item  mt-2">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse6" aria-expanded="false"
                                    aria-controls="flush-collapse6">
                                    São orgânicas?
                                </button>
                            </h2>
                            <div id="flush-collapse6" class="accordion-collapse collapse" data-bs-parent="#a1">
                                <div class="accordion-body">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel non incidunt ducimus
                                    sunt
                                    eveniet officia, corrupti laboriosam repudiandae quae reiciendis facilis possimus
                                    quam
                                    nostrum enim ut, expedita error nam? Adipisci?
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- EndFAQ -->
                </div>

            </aside>
            <div class="col-4">
                <h3 class="pb-2 mb-4 fst-italic border-bottom border-secondary">Localização</h3>

                <iframe width="370" height="350"
                    src="https://www.openstreetmap.org/export/embed.html?bbox=-52.66605377197266%2C-27.157073194169662%2C-52.54159927368164%2C-27.071354789865012&amp;layer=mapnik"
                    style="border: 1px solid black"></iframe><br />
                <small><a class="btn btn-success" href="https://www.openstreetmap.org/#map=13/-27.11422/-52.60383">Ver
                        mapa ampliado</a></small>
            </div>
        </div>

<?php
include "./php/base/footer.php";
?>