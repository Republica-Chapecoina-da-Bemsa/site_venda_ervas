<?php include "../base/header.php";?>
<h2 class="fst-italic">Entre em Contato</h2>
        <form class="mt-4 p-3 rounded" style="background-color: #88ef88;">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Email" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>
            <div class="mb-3">
                <div class="input-group">
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4"
                        placeholder="Titulo">
                </div>
            </div>

            <div class="input-group">
                <textarea class="form-control" aria-label="With textarea" placeholder="Conteudo..."
                    rows="10"></textarea>
            </div>
            <button onclick="alert('Muito obrigado pela sugestão')" class="btn btn-success mt-3">Enviar</button>
        </form>
        <div class="row mt-5">
            <div class="col-5">

                <h3 class="pb-2 mb-4 fst-italic border-bottom border-secondary">Localização</h3>

                <iframe width="450" height="400"
                    src="https://www.openstreetmap.org/export/embed.html?bbox=-52.66605377197266%2C-27.157073194169662%2C-52.54159927368164%2C-27.071354789865012&amp;layer=mapnik"
                    style="border: 1px solid black"></iframe><br />
                <small><a class="btn btn-success" href="https://www.openstreetmap.org/#map=13/-27.11422/-52.60383">Ver
                        mapa ampliado</a></small>
            </div>
            <div class="col-7">
                <h3 class="pb-2 mb-4 fst-italic border-bottom border-secondary">Venha nos conhecer</h3>
                <article class="mb-3">
                    <p style="text-align:justify"> Estamos localizados em Chapecó - Santa Catarina</p>
                    <p style="text-align:justify"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                        numquam voluptas repudiandae animi magnam cupiditate. Debitis aut perferendis corporis incidunt,
                        distinctio nostrum voluptas laboriosam eius quos. Explicabo labore earum officiis.</p>
                    <p style="text-align:justify"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                        numquam voluptas repudiandae animi magnam cupiditate. Debitis aut perferendis corporis incidunt,
                        distinctio nostrum voluptas laboriosam eius quos. Explicabo labore earum officiis.</p>
                    <p style="text-align:justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur
                        nobis aut, in sapiente quidem laudantium sequi corporis voluptatem non, vitae adipisci magnam
                        magni accusamus eaque, cumque suscipit ab vel. Nam, laudantium cupiditate praesentium
                        voluptatibus veritatis id soluta molestiae repellat dolore commodi quaerat ea ratione placeat
                        facere minus adipisci fugit similique aspernatur assumenda cumque. Placeat esse eius suscipit
                        eos, explicabo maiores amet, voluptates quos consequuntur exercitationem tempora ducimus
                        reiciendis numquam minima?</p>

                </article>
            </div>
        </div>

<?php include "../base/footer.php";?>