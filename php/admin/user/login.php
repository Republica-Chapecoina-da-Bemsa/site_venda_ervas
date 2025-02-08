<?php
include "../../base/header.php";
include "../db.class.php";
session_start();

$db = new db('user');

if (!empty($_POST)) {
    $usuario = $db->login($_POST);
    if ($usuario !== "error") {
        $_SESSION['login'] = $usuario["login"];
        $_SESSION['nome'] = $usuario["name"];
        header("location: ../../../index.php");
        exit();
    } else {
        $error_message = "Login ou senha errado, por favor tente novamente";
    }
}

if (!empty($_GET['logout'])) {
    session_destroy();
}
?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title fs-5">Login</h1>
            </div>
            <div class="card-body bg-light">
                <?php if (isset($error_message)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error_message; ?>
                    </div>
                <?php endif; ?>
                <form method="post" class="mt-4">
                    <div class="mb-3 pr-2 pl-2">
                        <label for="email" class="form-label">login</label>
                        <input type="text" class="form-control" id="email" name="login" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Entrar</button>
                    </div>
                    <div class="d-grid">
                        <a href="userForm.php" class="btn btn-primary mt-3">Cadastrar</a>
                    </div>
                </form>
            </div>
            <div class="card-footer text-end">
                <button type="button" class="btn btn-secondary">Close</button>
            </div>
        </div>
    </div>
</div>
<?php include "../../base/footer.php";?>
