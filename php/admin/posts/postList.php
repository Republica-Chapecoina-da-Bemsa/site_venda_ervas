<?php
include "../../base/header.php";
include "../db.class.php";
$db = new db('post');
$db->checkLogin();

if(!empty($_GET["id"])){
    $db->destroy($_GET["id"]);
    header("location: postList.php");
}
if(!empty(($_POST))){
    $posts = $db->filter($_POST);
}else{
    $posts = $db->all();
}
?>
<div class="container mt-5">
    <h2>Fornecedores</h2>
   <form action="./postList.php" method="post">
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
                <th>Data</th>
                <th>Autor</th>
           <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
                <tr>
                    <td><?php echo $post->id; ?></td>
                    <td><?php echo $post->name ?></td>
                    <td><?php echo $post->category ?></td>
                    <td><?php echo $post->date; ?></td>
                    <td><?php echo $post->author ?></td>
                    <td>
                        <a href="postForm.php?id=<?php echo $post->id; ?>" class="btn btn-primary btn-sm">Editar</a>
                        <a href="postList.php?id=<?php echo $post->id; ?>" onclick='return confirm(` Deseja realmete excluir?`)' class="btn btn-danger btn-sm">Deletar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="postForm.php" class="btn btn-success btn-sm">Novo Post</a>
</div>


<?php include "../../base/footer.php"; ?> 