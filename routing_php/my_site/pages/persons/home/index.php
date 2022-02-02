<?php
    include APP_PATH.'config/global-vars.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include $PATH_PROJECT.'/shared/global-metadata.php';
    ?>
    <title><?php echo $GLOBALS['tittlePage'] ?></title>

    <link rel="stylesheet" href="/assets/css/styles-global.css">
</head>
<body>

    <?php
        include $PATH_PROJECT.'/shared/header.php';
    ?>

    <div>
        <h2>Estás en la home <?php echo $GLOBALS['descriptionPage'] ?></h2>
    </div>
    
</body>
</html>