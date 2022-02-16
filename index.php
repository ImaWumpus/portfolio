<?php 
$auth = 0;
include 'lib/includes.php';
include 'lib/image.php';
include 'partials/header.php';

$select = $db->query("
    SELECT works.name, works.id, works.slug, images.name as image_name
    FROM works 
    LEFT JOIN images ON images.id = works.image_id");
$works = $select->fetchAll();
?>

<h1>Mon Portfolio en PHP</h1>

<div class="row">
    <?php foreach ($works as $k => $work): ?>
        <div class="col-sm-3">
            <a href="view.php?id=<?= $work['id']; ?>">
                <img src="<?= WEBROOT; ?>img/works/<?= resizedName($work['image_name'], 150, 150); ?>" alt="">
                <h2><?= $work['name']; ?></h2>
                <?= resizedName($work['image_name'], 150, 150); ?>
            </a>
        </div>
    <?php endforeach ?>
</div>


<?php include 'partials/footer.php'; ?>