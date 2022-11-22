
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Pelea</title>
</head>
<body>

    <div class="container">

        
    <?php

    function atacar(){

        $nombre = "Wartotle";
        $tipo = "Agua";
        $vida = 40;
        $ataque = 10;

        if($vida == $vida){
            $ataque = 0;
            ?>
            <div class="mt-3"></div>
    
            <?php
            echo " El Pókemon  $nombre". " ha sido derrotado<br>";
            echo "El Pókemon 1 ha ganado con una vida de: $vida";

        ?>
           <a href="../../../home/index.php" class="btn btn-primary">Regresar</a>
        <?php
        }


    }
    echo atacar();



?>

    </div>
    
</body>
</html>

