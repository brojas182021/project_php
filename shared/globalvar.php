<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/css/global.css">
</head>
</html>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

  
    <select class="field" name="opcprenda">
        <option default> ---</option>
        <option value="1"> Camisas</option>
        <option value="2"> Chaquetas</option>
        <option value="3"> Gorras</option>
    </select>
		<input type="submit" value="Buscar">
	</form>

  <div class="container">
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $GLOBALS['opcion'] = $_POST['opcprenda'];
      $GLOBALS['data'] = $dataJSON = file_get_contents('../shared/data.json');

      function cards(){
        $opcion = $GLOBALS['opcion'];
        $data_json = $GLOBALS['data'];
        $decode_json = json_decode($data_json,true);
        $prendas = $decode_json['prendas'];
        foreach($prendas as $prenda){
          echo "<div class='card'>";
            echo "  <img src='".$prenda['imagen']."' alt=''>";
            echo "  <p>".$prenda['nombre']."</p>";
            echo "  <a href='#'>$".$prenda['precio']."</a>";
            echo "</div>";
          }
      }
      cards();
      }
    ?>
  </div>