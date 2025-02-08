<?php
include "../../base/header.php";
include "../db.class.php";

$db = new db("supplier");
if (!empty($_POST)) {
    if (!empty($_POST)) {
        if (!empty($_POST['id'])) {
            $db->update($_POST);
        } else
            $db->insert($_POST);

        header("Location:suppliersList.php");
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
                <h1 class="card-title fs-5">Fornecedores</h1>
            </div>
            <div class="card-body bg-light">
                <?php if (isset($error_message)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error_message; ?>
                    </div>
                <?php endif; ?>
                <form action="suppliersForm.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $data->id ?? '' ?>">
                    <div class="mb-3 pr-2 pl-2">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $data->name ?? '' ?>" required>
                    </div>
                    <div class="mb-3 pr-2 pl-2">
                        <label for="cnpj" class="form-label">CNPJ</label>
                        <input type="text" class="form-control" id="cnpj" name="cnpj" value="<?php echo $data->cnpj ?? '' ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">telefone</label>
                        <input type="number" class="form-control" id="phone" name="phone" value="<?php echo $data->phone ?? '' ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $data->email ?? '' ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="farm" class="form-label">Nome da fazenda</label>
                        <input type="text" class="form-control" id="farm" name="farm" value="<?php echo $data->farm ?? '' ?>" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-end">
                <a href="./suppliersList.php" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    </div>
</div>

<?php include "../../base/footer.php"; ?>