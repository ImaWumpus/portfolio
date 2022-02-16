<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Portfolio de Mael Cadiou">
        <meta name="author" content="Mael Cadiou">

        <title>Mon administration</title>

        <link rel="icon" type="image/x-icon" href="<?= WEBROOT; ?>icon.png" />

        <!-- Bootstrap core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>

    <body>
        <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Mon premier Portfolio en PHP</a>
                </div>
                <ul class="nav navbar-nav">
                    <li>
                        <a href="category.php">Catégories</a>
                        <a href="work.php">Réalisations</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

            <?= flash(); ?>

            