<?php $auth = 0; ?>
<?php include 'lib/includes.php'; ?>
<?php include 'partials/header.php'; ?>

<form action="#" method="post">
    <div class="form-group">
        <label for="username">Nom d'utilisateur</label>
        <input type="text" class="form-control" id="username" name="username" 
        value="<?php if(isset($_POST['username'])){ echo $_POST['username'];} ?>">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="text" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn-default">Se connecter</button>
</form>

<?php include 'partials/footer.php'; ?>