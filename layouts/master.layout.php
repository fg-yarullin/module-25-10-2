<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'css.layout.php' ?>
    <title><?=$title?></title>
</head>
<body>
    <div class="container">
        <?php include 'nav.layout.php' ?>  
        <?= $output ?>
        <?php include 'footer.layout.php' ?>
    </div>  
    <?php include 'script.layout.php' ?>
</body>
</html>

