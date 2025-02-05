<?php include "../../base/header.php";
include "../db.class.php";

$db = new db("user");
$users = $db->all();
var_dump($users);
if (!empty($_POST)) {
    $user = $db->login($_POST);

    if ($user!=="error") {
        $_SESSION["user"] = $user->login;
        $_SESSION["nome"] = $user->nome;


        header("Location:index.php"); 
    } else {
        echo "<b>Login ou senha erradas</b>";
    }
}
?>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title fs-5">Login</h1>
                </div>
                <div class="card-body bg-light">
                    <form method="post" class="mt-4">
                        <div class="mb-3 pr-2 pl-2">
                            <label for="exampleInputEmail1" class="form-label">Login</label>
                            <input type="text" class="form-control" name="login" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Senha</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Entrar</button>
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
