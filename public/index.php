<?php
    include "../config/global-vars.php"
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tittle_page ?> Page</title>

    <link rel="stylesheet" href="css/global.css">
    
</head>
<body>

    <?php
        include "../shared/header.php";

        include "../pages/" . $tittle_page . "/" . $tittle_page . ".php";
    ?>

    
</body>
</html>