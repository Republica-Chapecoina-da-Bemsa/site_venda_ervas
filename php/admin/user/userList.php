<?php
include "../../base/header.php";
include "../db.class.php";
$db = new db('user');
$db->checkLogin();

if (!empty($_GET["id"])) {
    $db->destroy($_GET["id"]);
    header("location: userList.php");
}
if (!empty(($_POST))) {
    $users = $db->filter($_POST);
} else {
    $users = $db->all();
}
?>
<div class="container mt-5">
    <h2>User List</h2>
    <form action="./userList.php" method="post">
        <div class="btn-group">
            <select class="form-select" name="field" id="">
                <option value="name">Nome</option>
            </select>
            <input class="form-control" type="text" name="val">
            <button class="btn btn-success" type="submit">Buscar</button>
        </div>
    </form>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user->id; ?></td>
                    <td><?php echo $user->name ?></td>
                    <td><?php echo $user->email; ?></td>
                    <td>
                        <a href="userForm.php?id=<?php echo $user->id; ?>" class="btn btn-primary btn-sm">Editar</a>
                        <a href="userList.php?id=<?php echo $user->id; ?>"
                            onclick='return confirm(` Deseja realmete excluir?`)' class="btn btn-danger btn-sm">Deletar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="userForm.php" class="btn btn-success btn-sm">Novo usuário</a>

</div>


<?php include "../../base/footer.php"; ?>