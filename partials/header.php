<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Portfolio de Mael Cadiou">
        <meta name="author" content="Mael Cadiou">

        <title><?= isset($title) ? $title : 'Portfolio de Mael Cadiou'; ?></title>

        <link rel="icon" type="image/x-icon" href="<?= WEBROOT; ?>icon.png" />

        <!-- Bootstrap core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 

    </head>

    <body>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?= WEBROOT; ?>index.php">Accueil</a>
                </div>
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?= WEBROOT; ?>login.php">Se connecter</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">

        <p>&nbsp;</p>
            

            <?= flash(); ?>