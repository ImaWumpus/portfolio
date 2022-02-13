<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Portfolio de Mael Cadiou">
        <meta name="author" content="Mael Cadiou">

        <title>Mon administration</title>

        <link rel="icon" type="image/x-icon" href="icon.png" />

        <!-- Bootstrap core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <?php ob_start(); ?>
        <script src="https://cdn.tiny.cloud/1/eijs0o38u97wpb94p4rkfy6646b0r9g0grgkr7wh48rry4qi/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
      tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Mael Cadiou',
      language: 'fr_FR',
    });
    </script>

    <?php $script = ob_get_clean(); ?>
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

            <script src="https://code.jquery.com/jquery-1.11.1.js"></script>