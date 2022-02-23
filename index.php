<?php 
$auth = 0;
include 'lib/includes.php';
include 'lib/image.php';

$condition = '';
$category = false;
if(isset($_GET['category'])){
    $slug = $db->quote($_GET['category']);
    $select = $db->query("SELECT * FROM categories WHERE slug=$slug");
    if(!isset($_GET['category'])){
        header("HTTP/1.1 301 Moved Permanently");
        header('Location:' . WEBROOT);
        die();
    }
    $category = $select->fetch();
    $condition = "WHERE works.category_id={$category['id']}";
}
$works = $db->query("
    SELECT works.name, works.id, works.slug, images.name as image_name
    FROM works 
    LEFT JOIN images ON images.id = works.image_id
    $condition
")->fetchAll();

$categories = $db->query("SELECT slug, name FROM categories")->fetchAll();

if($category){
    $title = "Mes réalisations {$category['name']}";
}else{
    $title = "Bienvenue sur mon Portfolio";
}

include 'partials/header.php';
?>

<h1><?= $title; ?></h1>

<div class="row">
    <div class="col-sm-8">
        <div class="row">
            <?php foreach ($works as $k => $work): ?>
                <div class="col-sm-3">
                    <a href="<?= WEBROOT; ?>realisation/<?= $work['slug']; ?>">
                        <h2><?= $work['name']; ?></h2>
                        <img src="<?= WEBROOT; ?>img/works/<?= $work['image_name']; ?>" width="125", alt="">
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <div class="col-sm-4">
        <ul>
            <?php foreach($categories as $category): ?>
                <li>
                    <a href="<?= WEBROOT; ?>categorie/<?= $category['slug'] ?>">
                    <?= $category['name']; ?>
                </a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>

<?php include 'partials/footer.php'; ?>