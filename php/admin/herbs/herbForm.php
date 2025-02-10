<?php
include "../../base/header.php";
include "../db.class.php";

$db = new db("herbs");
$db->checkLogin();
$db->checkAdminLogin();

$suppliers = $db->all('supplier');
if (!empty($_POST)) {

    if (!empty($_POST['id'])) {
        $db->update($_POST);
    } else
        $db->insert($_POST);

    header("Location:herbList.php");

}
if ((!empty($_GET['id']))) {
    $data = $db->find($_GET['id']);
}

?>


<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title fs-5">Ervas</h1>
            </div>
            <div class="card-body bg-light">
                <?php if (isset($error_message)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error_message; ?>
                    </div>
                <?php endif; ?>
                <form action="herbForm.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $data->id ?? '' ?>">
                    <div class="mb-3 pr-2 pl-2">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="<?php echo $data->name ?? '' ?>" required>
                    </div>
                    <div class="mb-3 pr-2 pl-2">
                        <label for="description" class="form-label">Descrição</label>
                        <textarea rows="5" class="form-control" id="description" name="description"
                            required><?php echo $data->description ?? '' ?></textarea>
                    </div>
                    <div class="mb-3 pr-2 pl-2">
                        <label for="location" class="form-label">Localização</label>
                        <input rows="5" class="form-control" id="location" value="<?php echo $data->location ?? '' ?>"
                            name="location" required>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria</label>
                        <input type="text" class="form-control" id="category" name="category"
                            value="<?php echo $data->category ?? '' ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="supplier" class="form-label">Fornecedor</label>
                        <select class="form-control" id="supplier" name="supplier_id" required>
                            <option value="">Selecione um fornecedor</option>
                            <?php foreach ($suppliers as $supplier): ?>
                                <option value="<?php echo $supplier->id; ?>" <?php echo (isset($data->supplier_id) && $data->supplier_id == $supplier->id) ? 'selected' : ''; ?>>
                                    <?php echo $supplier->name; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-end">
                <a href="./postList.php" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    </div>
</div>

<?php include "../../base/footer.php"; ?>