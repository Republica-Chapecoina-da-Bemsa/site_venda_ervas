<?php
include "../../base/header.php";
include "../db.class.php";

$db = new db("user");
if (!empty($_POST)) {
    if ($_POST['password'] === $_POST["c_password"]) {

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);
        unset($_POST['c_password']);
        if (!empty($_POST['id'])) {
            $db->update($_POST);
        } else
            $db->insert($_POST);

        header("Location:login.php");
    } else {
        echo "<b>Senhas não coincidem</b>";
    }

}
if((!empty($_GET['id']))){
    $data = $db->find($_GET['id']);
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
                <form action="userForm.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $data->id ?? '' ?>">
                    <div class="mb-3 pr-2 pl-2">
                        <label for="email" class="form-label">name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $data->name ?? '' ?>" required>
                    </div>
                    <div class="mb-3 pr-2 pl-2">
                        <label for="email" class="form-label">login</label>
                        <input type="text" class="form-control" id="login" name="login" value="<?php echo $data->login ?? '' ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">telefone</label>
                        <input type="number" class="form-control" id="phone" name="phone" value="<?php echo $data->phone ?? '' ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $data->email ?? '' ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" value="" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Confirmar Senha</label>
                        <input type="password" class="form-control" id="c_password" name="c_password" value=""  required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                   
                </form>
            </div>
            <div class="card-footer text-end">
                <button type="button" class="btn btn-secondary">Close</button>
            </div>
        </div>
    </div>
</div>

<?php include "../../base/footer.php"; ?>