<?php
include "./db.class.php";
$db = new db("user");
if (!empty($_POST)) {
    if ($_POST['password'] === $_POST["c_password"]) {
        
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);
        unset($_POST['c_password']);
        $db->insert($_POST);

        header("Location:Login.php");
    } else {
        echo "<b>Senhas não coincidem</b>";
    }

}

?>

<form action="UsuarioForm.php" method="post">
    <input type="hidden" name="id" value="<?php echo $data->id ?? '' ?>">
    <input type="hidden" name="status" value="1">

    <h4>Formulário Usuario</h4>
    <label for="">Nome</label><br>
    <input type="text" name="name"><br>

    <label for="">Login</label><br>
    <input type="text" name="login"><br>

    <label for="">senha</label><br>
    <input type="password" name="password">

    <label for="">Confirmar senha</label><br>
    <input type="password" name="c_password">


    <button type="submit">Salvar</button>
</form>