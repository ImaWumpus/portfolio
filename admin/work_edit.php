<?php
include '../lib/includes.php';

if(isset($_POST['name']) && isset($_POST['slug'])){
    checkCsrf();
    $slug = $_POST['slug'];
    if(preg_match('/^[a-z\-0-9]+$/', $slug)){
        $name = $db->quote($_POST['name']);
        $slug = $db->quote($_POST['slug']);
        if(isset($_GET['id'])){
            $id = $db->quote($_GET['id']);
            $db->query("UPDATE works SET name=$name, slug=$slug WHERE id=$id");
        }else{
            $db->query("INSERT INTO works SET name=$name, slug=$slug");
        }
        setFlash('La catégorie à bien été ajoutée');
        header('Location:category.php');
        die();
    }else{
        setFlash('Le slug n\'est pas valide', 'danger');
    }
    
}

if(isset($_GET['id'])){
    $id = $db->quote($_GET['id']);
    $select = $db->query("SELECT * FROM works WHERE id=$id");
    if($select->rowCount() == 0){
        setFlash("Il n'y a pas de catégorie avec cet ID", 'danger');
        header('Location:category.php');
        die();
    }
    $_POST = $select->fetch();
    
}

$select = $db->query('SELECT id, name FROM categories ORDER  BY name ASC');
$categories = select->fetchAll();
$categories_list = array();
foreach($categories as $category){
    $categories_qlist[$category['id']] = $category['name'];
}

include '../partials/admin_header.php';
?>




<h1>Editer une réalisation</h1>


<form action="#" method="post">
    <div class="form-group">
        <label for="name">Nom de la réalisation</label>
        <?= input('name'); ?>
    </div>
    <div class="form-group">
        <label for="slug">URL de la réalisation</label>
        <?= input('slug'); ?>
    </div>
    <div class="form-group">
        <label for="content">Contenu de la réalisation</label>
        <?= textarea('content'); ?>
    </div>
    <div class="form-group">
        <label for="category_id">Catégorie</label>
        <?= select('category_id', $categories_list); ?>
    </div>
    <?= csrfInput(); ?>
    <button type="submit" class="btn btn-default">Enregistrer</button>
</form>



<?php include '../partials/footer.php'; ?>