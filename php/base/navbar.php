<?php
$base_url = (basename(getcwd()) != "pages") ? "php/pages/" : "./";
$base_url = (basename(getcwd()) != "user") ?  $base_url : "../../../" .$base_url;
$index_url = (basename(getcwd()) != "site_venda_ervas") ? "../../index.php" : "#";
$index_url = (basename(getcwd()) != "user") ? $index_url : "../" .$index_url;


?>
<!-- NavBar -->
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
            </div>
        </div>
    </nav>
    <!-- End Nav -->