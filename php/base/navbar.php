<?php
$base_url = (basename(getcwd()) != "pages") ? "php/pages/" : "./";
$index_url = (basename(getcwd()) !="site_venda_ervas")? "../../index.php":"#"

?>
<!-- NavBar -->
    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="loginModalLabel">Login</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-light">
                    <form class="mt-4">
                        <div class="mb-3 pr-2 pl-2 ">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Lembre-se de mim</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Entrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- EndModal -->
    <nav class="navbar navbar-expand-lg" style="background-color: #77fc77;">
        <div class="container-fluid">
            <a class="navbar-brand p-2" href="<?php echo $index_url?>">HERABAE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="<?php echo $index_url?>">Home</a>
                    <a class="nav-link" href="<?php echo $base_url?>blog.php">Blog</a>
                    <a class="nav-link active" aria-disabled="true" href="<?php echo $base_url?>contact.php">Contato</a>
                    <a class="nav-link " aria-disabled="true" href="<?php echo $base_url?>catalog.php">Catálogo</a>
                    <a class="nav-link " aria-disabled="true" href="<?php echo $base_url?>about_us.php">Sobre nós</a>
                </div>
                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                    data-bs-target="#loginModal">
                    Login
                </button>
            </div>
        </div>
    </nav>
    <!-- End Nav -->