<div>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    
    <select class="field" name="opcprenda">
        <option default></option>
        <option value="1"> Camisas</option>
        <option value="2"> Chaquetas</option>
        <option value="3"> Gorras</option>
    </select>

    <input type="submit" id="submit_button" value="Buscar">

    </form>

    <div class="container">

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $GLOBALS['data'] = $dataJSON = file_get_contents('../shared/data.json');
        $GLOBALS['opcion'] = $_POST['opcprenda'];

        cards();
    }

    function cards(){
        $opcion = $GLOBALS['opcion'];

        $data = $GLOBALS['data'];

        $decoded_json = json_decode($data, true);
        
        switch($opcion){
        
        case 1:
        
        $camisas = $decoded_json['camisas'];
        
        foreach($camisas as $camisa) {
            echo "<div class='card'>";
            echo "  <img src='".$camisa['imagen']."' alt=''>";
            echo "  <p>".$camisa['nombre']."</p>";
            echo "  <a href='#'>$".$camisa['precio']."</a>";
            echo "</div>";
        }
        break;
        
        case 2:
            $chaquetas = $decoded_json['chaquetas'];
        
            foreach($chaquetas as $chaqueta) {
            echo "<div class='card'>";
            echo "  <img src='".$chaqueta['imagen']."' alt=''>";
            echo "  <p>".$chaqueta['nombre']."</p>";
            echo "  <a href='#'>$".$chaqueta['precio']."</a>";
            echo "</div>";
            }
        break;
        
        case 3:
            $gorras = $decoded_json['gorras'];
        
            foreach($gorras as $gorra) {
            echo "<div class='card'>";
            echo "  <img src='".$gorra['imagen']."' alt=''>";
            echo "  <p>".$gorra['nombre']."</p>";
            echo "  <a href='#'>$".$gorra['precio']."</a>";
            echo "</div>";
            }
        break;
        }
    }
    ?>
</div>