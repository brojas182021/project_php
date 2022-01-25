<?php
  include "../config/config.php";

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $GLOBALS['conexion'] = $Cnn;
    $GLOBALS['opcion'] = $_POST['opcprenda'];
  }

function cards(){
    $opcion = $GLOBALS['opcion'];
    $conexion = $GLOBALS['conexion'];
    $queryp = "SELECT * FROM prenda WHERE tipo = $opcion";
    $prendas = mysqli_query($conexion,$queryp);
    while($infoPrendas = mysqli_fetch_array($prendas)){
        echo "<div class='card'>";
        echo "  <img src='".$infoPrendas['imagen']."' alt=''>";
        echo "  <p>".$infoPrendas['nombre']."</p>";
        echo "  <a href='#'>$".$infoPrendas['precio']."</a>";
        echo "</div>";
      }
    }
?>

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
        <option default></option>
        <option value="1"> Camisas</option>
        <option value="2"> Pantalones</option>
        <option value="3"> Chaquetas</option>
        <option value="4"> Gorras</option>
    </select>
		<input type="submit" value="Buscar">
	</form>

  <div class="container">
    <?php
    cards();
    ?>
  </div>