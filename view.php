<?php 
$auth = 0;
include 'lib/includes.php';


if(!isset($_GET['slug'])){
    header("HTTP/1.1 301 Moved Permanently");
    header('Location:index.php');
    die();
}
$slug = $db->quote($_GET['slug']);
$select = $db->query("SELECT * FROM works WHERE slug = $slug");
if($select->rowCount() == 0){
    header("HTTP/1.1 301 Moved Permanently");
    header('Location:index.php');
    die();
}
$work = $select->fetch();
$work_id = $work['id'];

$select = $db->query("SELECT * FROM images WHERE work_id = $work_id");
$images = $select->fetchAll();
$title = $work['name'];

include 'partials/header.php';
?>

<h1><?= $work['name']; ?></h1>

<?= $work['content']; ?>

<?php foreach ($images as $k => $image): ?>
    <p>
    <img src="<?= WEBROOT; ?>img/works/<?= $image['name']; ?>"width="100%">
    </p>
<?php endforeach ?>


<?php include 'partials/footer.php'; ?>