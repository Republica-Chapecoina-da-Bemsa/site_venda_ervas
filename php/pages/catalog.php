<?php include "../base/header.php";
include "../admin/db.class.php";

$db = new db("herbs");
$db->checkLogin(); 
$herbs = $db->all();
$count = 0;
?>


<div class="row mt-2">
    <?php foreach ($herbs as $herb):
        $count++;
        ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h2><?php echo htmlspecialchars($herb->name); ?></h2>
                    <p class="card-text"><?php echo htmlspecialchars($herb->description); ?></p>
                    <p class="card-text" style="color: green; font-weight: bold;">Categoria: <?php echo htmlspecialchars($herb->category); ?></p>
                </div>
                <div class="card-footer">
                    <small class="text-muted"><?php echo htmlspecialchars($herb->location); ?></small>
                </div>
            </div>
        </div>
        <?php if ($count % 3 == 0): ?>
            </div><div class="row mt-2">
        <?php endif; ?>
    <?php endforeach; ?>
</div>


<?php include "../base/footer.php"; ?>