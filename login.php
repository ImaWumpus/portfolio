<?php 
$auth = 0;
include 'lib/includes.php';

/**
* TRAITEMENT DU FORMULAIRE
**/
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $db->quote($_POST['username']);
    $password = sha1($_POST['password']);
    $select = $db->query("SELECT * FROM users WHERE username=$username AND password='$password'");
    if($select->rowCount() > 0){
        $_SESSION['Auth'] = $select->fetch();
        setFlash('Vous etes maintenant connecté');
        header('Location:' . WEBROOT . 'admin/index.php');
        die();
    
    }else{
        setFlash('Nom d\'utilisateur ou mot de passe non valide', 'danger');
    }
}

/**
* Inclusion du header 
**/
include 'partials/header.php';
?>

<form action="#" method="post">
    <div class="form-group">
        <label for="username">Nom d'utilisateur</label>
        <?= input('username'); ?>
    </div>
    <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn-default">Se connecter</button>
</form>

<?php include 'partials/footer.php'; ?>