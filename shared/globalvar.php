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

  
    <select class="field" name="numgen">
        <option default></option>
        <option value="1"> Camisas</option>
        <option value="2"> Pantalones</option>
        <option value="3"> Chaquetas</option>
        <option value="4"> Gorras</option>
    </select>
		<input type="submit" value="Buscar">

	</form>

<?php
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    capturarInfo();
    echo $prenda;
  }

  function capturarInfo(){
    $GLOBALS['prenda']=$_POST['numgen'];
  }
  ?>