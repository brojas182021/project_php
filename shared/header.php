<?php
  include "../config/config.php";
  $nav = "SELECT * FROM navegacion LIMIT 4";
  $navres = mysqli_query($Cnn,$nav);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/global.css">
</head>
<body>
    <header id="header"> 
      
    <div class="wrapper">
        <h3 class="logo">MOB</h3>
        <nav>
            <?php
                while($row= mysqli_fetch_array($navres)){
                    echo "<a href='#'>".$row['opcion']."</a>";        
                }
            ?>  
        </nav>
    </div>
     </header>
</body>
</html>