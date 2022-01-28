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
            $JSON = file_get_contents('../shared/data.json');
            $decode_json = json_decode($JSON, true);
            $opciones = $decode_json['navegacion'];   
            foreach($opciones as $country) {
            echo "<a href='#'>".$country['opcion']."</a>";
            }
        ?>  
        </nav>
    </div>
     </header>
</body>
</html>