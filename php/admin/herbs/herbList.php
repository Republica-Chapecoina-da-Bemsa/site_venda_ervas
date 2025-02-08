<?php
include "../../base/header.php";
include "../db.class.php";

$db = new db('herbs');
$db->checkLogin();
$db->checkAdminLogin();

$suppliers = $db->all('supplier');

if (!empty($_GET["id"])) {
    $db->destroy($_GET["id"]);
    header("location: herbList.php");
}
if (!empty(($_POST))) {
    $herbs = $db->filter($_POST);
} else {
    $herbs = $db->all();
}
?>
<div class="container mt-5">
    <h2>Fornecedores</h2>
    <form action="./herbList.php" method="post">
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
                <th>Nome</th>
                <th>Categoria</th>
                <th>Fornecedor</th>
                <th>Localização</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($herbs as $herb): ?>

                <tr>
                    <td><?php echo $herb->id; ?></td>
                    <td><?php echo $herb->name ?></td>
                    <td><?php echo $herb->category ?></td>
                    <td>
                        <?php
                        foreach ($suppliers as $supplier) {
                            if ($supplier->id == $herb->supplier_id) {
                                echo $supplier->name;
                                break;
                            }
                        }
                        ?>
                    </td>
                    <td><?php echo $herb->location ?></td>
                    <td>
                        <a href="herbForm.php?id=<?php echo $herb->id; ?>" class="btn btn-primary btn-sm">Editar</a>
                        <a href="herbList.php?id=<?php echo $herb->id; ?>"
                            onclick='return confirm(` Deseja realmete excluir?`)' class="btn btn-danger btn-sm">Deletar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="herbForm.php" class="btn btn-success btn-sm">Nova erva</a>
</div>


<?php include "../../base/footer.php"; ?>