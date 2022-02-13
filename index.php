<?php 
$auth = 0;
include 'lib/includes.php';
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
        <div class="col_sm-3">
            <a href="view.php?id=<?= $work['id']; ?>">
                <img src="<?= WEBROOT; ?>portfolio/img/works/<?= $work['image_name']; ?>" alt="">
                <h2><?= $work['name']; ?></h2>
            </a>
        </div>
    <?php endforeach ?>
</div>


<?php include 'partials/footer.php'; ?>