<?php
include "../../base/header.php";
include "../db.class.php";

$db = new db('supplier');
$db->checkLogin();
$db->checkAdminLogin();

if(!empty($_GET["id"])){
    $db->destroy($_GET["id"]);
    header("location: suppliersList.php");
}
if(!empty(($_POST))){
    $suppliers = $db->filter($_POST);
}else{
    $suppliers = $db->all();
}
?>
<div class="container mt-5">
    <h2>Fornecedores</h2>
   <form action="./suppliersList.php" method="post">
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
                <th>CNPJ</th>
                <th>Email</th>
                <th>Fazenda</th>
           <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($suppliers as $supplier): ?>
                <tr>
                    <td><?php echo $supplier->id; ?></td>
                    <td><?php echo $supplier->name ?></td>
                    <td><?php echo $supplier->cnpj ?></td>
                    <td><?php echo $supplier->email; ?></td>
                    <td><?php echo $supplier->farm ?></td>
                    <td>
                        <a href="suppliersForm.php?id=<?php echo $supplier->id; ?>" class="btn btn-primary btn-sm">Editar</a>
                        <a href="suppliersList.php?id=<?php echo $supplier->id; ?>" onclick='return confirm(` Deseja realmete excluir?`)' class="btn btn-danger btn-sm">Deletar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="suppliersForm.php" class="btn btn-success btn-sm">Novo Forncedor</a>
</div>


<?php include "../../base/footer.php"; ?> 